<?php

namespace App\Models\Parameter;

use App\Models\Parameter\Establishment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class EstablishmentType extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'establishment_types';

    protected $fillable = [
        'name',
    ];

    public function establishments(): HasMany
    {
        return $this->hasMany(Establishment::class);
    }

}
