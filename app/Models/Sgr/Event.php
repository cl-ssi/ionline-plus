<?php

namespace App\Models\Sgr;

use App\Models\Rrhh\OrganizationalUnit;
use App\Models\User;
use App\Models\Sgr\Requirement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use App\Observers\Sgr\EventObserver;

#[ObservedBy([EventObserver::class])]
class Event extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'requirement_id',
        'body',
        'event_type_id',
        'limit_at',
        'creator_id',
        'creator_ou_id',
        'to_user_id',
        'to_ou_id',
    ];

    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'sgr_events';

    // relaciones

    public function requirement(): BelongsTo{
        return $this->belongsTo(Requirement::class);
    }

    public function eventType(): BelongsTo {
        return $this->belongsTo(EventType::class);
    }

    public function creator(): BelongsTo {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function toUser(): BelongsTo {
        return $this->belongsTo(User::class, 'to_user_id')->withTrashed();
    }

    public function creatorOu(): BelongsTo {
        return $this->belongsTo(OrganizationalUnit::class, 'creator_ou_id');
    }

    public function toOu(): BelongsTo {
        return $this->belongsTo(OrganizationalUnit::class, 'to_ou_id');
    }
}
