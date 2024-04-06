<?php

namespace App\Models\Parameter;

use App\Models\Commune;
use App\Models\Parameter\EstablishmentType;
use App\Models\Parameter\HealthService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Establishment extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'alias',
        'type',
        'mother_code',
        'new_mother_code',
        'establishment_type_id',
        'deis',
        'new_deis',
        'sirh_code',
        'commune_id',
        'dependency',
        'health_services_id',
        'official_name',
        'administrative_dependency',
        'level_of_care',
        'street_type',
        'street_number',
        'address',
        'url',
        'telephone',
        'emergency_service',
        'latitude',
        'longitude',
        'level_of_complexity',
        'provider_type_health_system',
        'mail_director',
        'father_organizational_unit_id',
    ];

    public function healthService(): BelongsTo
    {
        return $this->belongsTo(HealthService::class);
    }

    public function commune(): BelongsTo
    {
        return $this->belongsTo(Commune::class);
    }

    public function establishmentType(): BelongsTo
    {
        return $this->belongsTo(EstablishmentType::class);
    }

    // public function fatherOrganizationalUnit(): BelongsTo
    // {
    //     return $this->belongsTo(OrganizationalUnit::class, 'father_organizational_unit_id');
    // }
}
