<?php

namespace App\Models\Parameter;

use App\Models\Parameter\Establishment;
use App\Models\Region;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class HealthService extends Model
{
    use HasFactory;//, SoftDeletes;

    protected $table = 'health_services';

    protected $fillable = [
        'name',
        'region_id',
    ];

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }

    public function establishments(): HasMany
    {
        return $this->hasMany(Establishment::class);
    }

}
