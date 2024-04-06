<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $table = 'cl_regions';

    // Fillable
    protected $fillable = [
        'name',
        'id_minsal',
    ];
}
