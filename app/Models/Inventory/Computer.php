<?php

namespace App\Models\Inventory;

use App\Models\Inventory\Inventory;
use App\Models\Inventory\InventoryLabel;
use App\Models\Parameter\Place;
use App\Models\Inventory\ComputerLabel;
use App\Models\User;
use GPBMetadata\Google\Type\Datetime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

enum ComputerTypeEnum: string
{
    case DESKTOP = 'desktop';
    case ALL_IN_ONE = 'all-in-one';
    case NOTEBOOK = 'notebook';
    case OTHER = 'other';

    public function displayName(): string
    {
        return match ($this) {
            self::DESKTOP => 'Escritorio',
            self::ALL_IN_ONE => 'All-in-One',
            self::NOTEBOOK => 'Notebook',
            self::OTHER => 'Otro',
        };
    }
}

class Computer extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'res_computers';

    protected $fillable = [
        'id',
        'type',
        'brand',
        'model',
        'serial',
        'hostname',
        'domain',
        'ip',
        'mac_address',
        'ip_group',
        'rack',
        'vlan',
        'network_segment',
        'operating_system',
        'processor',
        'ram',
        'hard_disk',
        'inventory_number',
        'active_type',
        'intesis_id',
        'comment',
        'status',
        'office_serial',
        'windows_serial',
        'fusion_at',
        'place_id',
        'inventory_id',
    ];

    protected $casts = [
        'deleted_at' => 'datetime',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'res_computer_user')->withTimestamps();
    }

    public function place(): BelongsTo
    {
        return $this->belongsTo(Place::class);
    }

    public function inventory(): BelongsTo
    {
        return $this->belongsTo(Inventory::class);
    }

    public function labels(): BelongsToMany
    {
        return $this->belongsToMany(InventoryLabel::class, 'res_computer_label', 'computer_id', 'label_id')
            ->using(ComputerLabel::class)
            ->withPivot(['computer_id', 'label_id'])
            ->withTimestamps();
    }

    public function isMerged()
    {
        return $this->fusion_at != null;
    }

    public function scopeSearch($query, $search)
    {
        if ($search != "") {
            return $query->where('brand', 'LIKE', '%' . $search . '%')
                ->orWhere('model', 'LIKE', '%' . $search . '%')
                ->orWhere('ip', 'LIKE', '%' . $search . '%')
                ->orWhere('serial', 'LIKE', '%' . $search . '%')
                ->orWhere('inventory_number', 'LIKE', '%' . $search . '%');
        }
    }

    public function tipo(): string
    {
        return $this->type->displayName();
    }

    // public function tipoActivo()
    // {
    //     switch ($this->active_type)
    //     {
    //         case 'leased':
    //             $valor = 'Arrendado';
    //             break;
    //         case 'own':
    //             $valor = 'Propio';
    //             break;
    //         case 'user':
    //             $valor = 'Usuario';
    //             break;
    //         default:
    //             $valor = '';
    //             break;
    //     }
    //     return $valor;
    // }
}
