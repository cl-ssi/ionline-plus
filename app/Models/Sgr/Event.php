<?php

namespace App\Models\Sgr;

use App\Models\User;
use App\Models\Sgr\Requirement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'body', 
        'status',
        'from_user_id',
        'from_ou_id',
        'to_user_id',
        'to_ou_id',
        'requirement_id',
        'limit_at',
        'to_authority'
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

    public function from_user(): BelongsTo {
        return $this->belongsTo(User::class, 'from_user_id')->withTrashed();
    }
}
