<?php

namespace App\Models\Inventory;

use App\Models\Parameter\Place;
use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Telephone extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'res_telephones';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number',
        'minsal',
        'mac',
        'place_id'
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'res_telephone_user')->withTimestamps();
    }

    public function place(): BelongsTo
    {
        return $this->belongsTo(Place::class);
    }

}