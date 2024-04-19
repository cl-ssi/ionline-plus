<?php

namespace App\Models\Sgr;

use App\Models\User;
use App\Models\Sgr\Event;
use App\Models\Sgr\Category;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Requirement extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id',
        'subject',
        'priority',
        'status',
        'limit_at',
        'user_id',
        'parte_id',
        'group_number',
        'to_authority',
        'category_id'
    ];

    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'sgr_requirements';

    // relaciones

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongTo {
        return $this->belongsTo(Category::class);
    }

    public function events(): HasMany {
        return $this->hasMany(Event::class);
    }

    // funciones

    public function firstEvent(): HasOne
    {
        return $this->hasOne(Event::class)->where('status','creado');
    }

    public function lastEvent(): HasOne
    {
        return $this->hasOne(Event::class)->latest();
    }
}
