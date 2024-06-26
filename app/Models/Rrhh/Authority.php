<?php

namespace App\Models\Rrhh;

use App\Models\Rrhh\OrganizationalUnit;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Authority extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory, SoftDeletes;

    const TYPE_MANAGER = 'manager';
    const TYPE_SECRETARY = 'secretary';
    const TYPE_DELEGATE = 'delegate';

    protected $table = 'rrhh_authorities';

    protected $fillable = [
        'user_id',
        'organizational_unit_id',
        'date',
        'position',
        'type',
        'decree',
        'representation_id',
        'from_time',
        'to_time',
    ];

    protected $casts = [
        'date' => 'date:Y-m-d',
        // 'from_time' => 'time',  // No existe casts para time
        // 'to_time' => 'time',
    ];


    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }

    public function organizationalUnit(): BelongsTo
    {
        return $this->belongsTo(OrganizationalUnit::class);
    }

    public function representation()
    {
        return $this->belongsTo(User::class, 'representation_id')->withTrashed();
    }
}
