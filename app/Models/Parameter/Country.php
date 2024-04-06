<?php

namespace App\Models\Parameter;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'countries';

    protected $fillable = [
        'name',
        'id_minsal',
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
