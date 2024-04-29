<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Observers\NewsObserver;

#[ObservedBy([NewsObserver::class])]
class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'title',
        'subtitle',
        'image',
        'lead',
        'body',
        'publication_date_at',
        'until_at',
        'publication_date_at',
        'user_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected $casts = [
        'created_at'            => 'datetime',
        'publication_date_at'   => 'datetime',
        'until_at'              => 'datetime',
    ];

    protected $table = 'news';
}
