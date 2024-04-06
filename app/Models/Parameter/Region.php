<?php

namespace App\Models\Parameter;

use App\Models\Parameter\Commune;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Region extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'cl_regions';

    protected $fillable = [
        'name',
        'id_minsal',
    ];

    public function communes(): HasMany
    {
        return $this->hasMany(Commune::class);
    }
}
