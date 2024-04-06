<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
