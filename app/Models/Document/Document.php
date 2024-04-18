<?php

namespace App\Models\Document;

use App\Models\Document\Type;
use App\Models\Parameter\Establishment;
use App\Models\Rrhh\OrganizationalUnit;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Document extends Model implements Auditable
{
    use HasFactory, SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number',
        'internal_number',
        'date',
        'type_id',
        'reserved',
        'antecedent',
        'responsible',
        'subject',
        'from',
        'for',
        'greater_hierarchy',
        'distribution',
        'content',
        'file',
        'user_id',
        'organizational_unit_id',
        'file_to_sign_id',
        'establishment_id',
        'signature_id',
    ];

    protected $table = 'documents';

    protected $casts = [
        'date' => 'date',
    ];

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class)->withTrashed();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->withTrashed();
    }

    public function organizationalUnit(): BelongsTo
    {
        return $this->belongsTo(OrganizationalUnit::class)->withTrashed();
    }

    public function establishment(): BelongsTo
    {
        return $this->belongsTo(Establishment::class);
    }
    
}
