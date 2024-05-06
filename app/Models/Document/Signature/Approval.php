<?php

namespace App\Models\Document\Signature;

use App\Models\Rrhh\OrganizationalUnit;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Observers\Document\Signature\ApprovalObserver;

#[ObservedBy([ApprovalObserver::class])]
class Approval extends Model
{
    use HasFactory;

    protected $table = 'sign_approvals';

    protected $fillable = [
        'module',
        'module_icon',
        'subject',
        'document_route_name',
        'document_route_params',
        'document_pdf_path',
        'sent_to_ou_id',
        'sent_to_user_id',
        'approver_ou_id',
        'approver_id',
        'approver_observation',
        'approver_at',
        'status',
        'callback_controller_method',
        'callback_controller_params',
        'callback_feedback_inputs',
        'active',
        'previous_approval_id',
        'approvable_id',
        'approvable_type',
        'digital_signature',
        'endorse',
        'position',
        'start_y',
        'filename',
    ];

    protected $casts = [
        'approver_at' => 'datetime',
        'status' => 'boolean',
        'active' => 'boolean',
        'digital_signature' => 'boolean',
        'endorse' => 'boolean',
    ];

    public function sentToOu(): BelongsTo
    {
        return $this->belongsTo(OrganizationalUnit::class, 'sent_to_ou_id');
    }

    public function sentToUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'sent_to_user_id');
    }

    public function approverOu(): BelongsTo
    {
        return $this->belongsTo(OrganizationalUnit::class, 'approver_ou_id');
    }

    public function approver(): BelongsTo
    {
        return $this->belongsTo(User::class, 'approver_id');
    }

    /**
     * Get the next approval associated with this approval.
     */
    public function nextApproval(): HasOne
    {
        return $this->hasOne(Approval::class, 'previous_approval_id');
    }

    /**
     * Get the previous approval.
     */
    public function previousApproval(): BelongsTo
    {
        return $this->belongsTo(Approval::class, 'previous_approval_id');
    }

    /**
     * Get the polymorphic  parent approvable model:
     * - ModificationRequest
     * - NoAttendanceRecord
     * - Fulfillment
     * - SignatureRequest
     */
    public function approvable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * Get the user's first name.
     */
    protected function icon(): Attribute
    {
        return Attribute::make(
            get: fn(mixed $value, array $attributes) => match ($attributes['status']) {
                1 => 'approved',      // Cuando el status es verdadero
                0 => 'rejected',      // Cuando el status es falso
                default => 'pending'  // Cuando el status es null o cualquier otro caso
            }
        );
    }
    protected $appends = ['icon'];
}
