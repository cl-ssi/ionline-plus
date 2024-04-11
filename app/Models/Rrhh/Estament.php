<?php

namespace App\Models\Rrhh;

use App\Models\Rrhh\Profession;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Estament extends Model
{
    use HasFactory;

    protected $table = 'cfg_estaments';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'category',
        'name'
    ];

    public function professions(): HasMany
    {
        return $this->hasMany(Profession::class);
    }

}
