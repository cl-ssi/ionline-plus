<?php

namespace App\Models\Rrhh;

use App\Models\Rrhh\Estament;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Profession extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory;
    use SoftDeletes;

    public $table = 'cfg_professions';

    protected $fillable = [
        'name',
        'estament_id',
        'sirh_plant',
        'sirh_profession',
    ];

    public function estament(): BelongsTo
    {
        return $this->belongsTo(Estament::class);
    }
}
