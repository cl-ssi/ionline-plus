<?php

namespace App\Models\Document;

use App\Models\Document\Type;
use App\Models\File;
use App\Models\Parameter\Establishment;
use App\Models\Rrhh\OrganizationalUnit;
use App\Models\Sgr\Requirement;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parte extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'correlative',
        'entered_at',
        'type_id',
        'reserved',
        'date',
        'number',
        'origin',
        'subject',
        'important',
        'physical_format',
        'establishment_id',
        // 'organizational_unit_id',
        // 'user_id',
        'signatures_file_id',
        // 'reception_date',
        'viewed_at',
    ];

    protected $casts = [
        'date' => 'date:Y-m-d',
        'deleted_at' => 'datetime',
        'viewed_at' => 'datetime',
    ];

    public function requirements(): HasMany
    {
        return $this->hasMany(Requirement::class);
    }

    /**
     * Get all of the files of a model.
     */
    public function files(): MorphMany
    {
        return $this->morphMany(File::class, 'fileable');
    }

    public function establishment(): BelongsTo
    {
        return $this->belongsTo(Establishment::class);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class)->withTrashed();
    }

    // public function user(): BelongsTo
    // {
    //     return $this->belongsTo(User::class)->withTrashed();
    // }

    public function organizationalUnit(): BelongsTo
    {
        return $this->belongsTo(OrganizationalUnit::class)->withTrashed();
    }
}
