<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use App\Observers\FileObserver;

#[ObservedBy([FileObserver::class])]
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

    public function storedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'stored_by_id');
    }
}
