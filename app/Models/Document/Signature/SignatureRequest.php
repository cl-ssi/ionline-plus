<?php

namespace App\Models\Document\Signature;

use App\Models\Document\Signature\Approval;
use App\Models\Document\Type;
use App\Models\File;
use App\Models\Rrhh\OrganizationalUnit;
use App\Models\User;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class SignatureRequest extends Model
{
    use HasFactory;

    protected $table = 'sign_signature_requests';

    protected $fillable = [
        'request_date',
        'original_file_path',
        'original_file_name',
        'url',
        'status',
        'user_id',
        'organizational_unit_id',
        'type_id',
        'subject',
        'description',
        'recipients',
        'distribution',
        'reserved',
        'oficial',
        'sensitive',
        'signature_page',
        'response_within_days',
        'endorse_type_id',
        'verification_code',
        'last_approval_id',
    ];

    protected $casts = [
        'status'    => 'boolean',
        'reserved'  => 'boolean',
        'oficial'   => 'boolean',
        'sensitive' => 'boolean',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function organizationalUnit(): BelongsTo
    {
        return $this->belongsTo(OrganizationalUnit::class);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }

    public function lastApproval(): BelongsTo
    {
        return $this->belongsTo(Approval::class, 'last_approval_id');
    }

    /**
     * Get all of the approvations of a model.
     */
    public function signatures(): MorphMany
    {
        return $this->morphMany(Approval::class, 'approvable')->where('endorse', false);
    }
    public function visations(): MorphMany
    {
        return $this->morphMany(Approval::class, 'approvable')->where('endorse', true);
    }

    public function files(): MorphMany
    {
        return $this->morphMany(File::class, 'fileable');
    }

    public function endorseType(): BelongsTo
    {
        return $this->belongsTo(EndorseType::class);
    }

    public function sign($otp)
    {
        // dd();
        Notification::make()
            ->title('sign: ' . $this->id . ' - ' . $otp)
            ->success()
            ->send();
    }

}
