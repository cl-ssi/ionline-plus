<?php

namespace App\Models\Parameter;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use App\Observers\Parameter\LogObserver;

#[ObservedBy([LogObserver::class])]
class Log extends Model
{
    use HasFactory;

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'user_id',
        'message',
        'module',
        'uri',
        'formatted',
        'context',
        'level',
        'level_name',
        'channel',
        'extra',
        'remote_addr',
        'user_agent',
        'record_datetime',
        'created_at',
        'updated_at'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->withTrashed();
    }
}
