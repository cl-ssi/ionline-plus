<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'storage_path',
        'stored',
        'name',
        'type',
        'input_title',
        'input_name',
        'required',
        'valid_types',
        'max_file_size',
        'stored_by_id',
        'fileable_type',
        'fileable_id',
    ];

    protected $casts = [
        'stored' => 'boolean',
        'required' => 'boolean',
    ];

    public function fileable(): MorphTo
    {
        return $this->morphTo();
    }
}
