<?php

namespace App\Models\Parameter;

use App\Models\Parameter\Region;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Commune extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'cl_communes';

    protected $fillable = [
        'id',
        'name',
        'code_deis',
        'region_id'
    ];

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class, 'region_id');
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function establishments(): HasMany
    {
        return $this->hasMany(Establishment::class);
    }

}
