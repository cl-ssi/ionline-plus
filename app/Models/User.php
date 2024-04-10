<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Parameter\Commune;
use App\Models\Parameter\Country;
use App\Models\Parameter\Establishment;
use App\Models\Parameter\OrganizationalUnit;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable, HasRoles, SoftDeletes;

    public function canAccessPanel(Panel $panel): bool
    {
        return str_ends_with($this->email, '@redsalud.gob.cl');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'dv',
        'name',
        'fathers_family',
        'mothers_family',
        'gender',
        'birthday',
        'address',
        'commune_id',
        'country_id',
        'email',
        'email_personal',
        'email_verified_at',
        'phone_number',
        'password',
        'password_changed_at',
        'establishment_id',
        'organizational_unit_id',
        'position',
        'vc_link',
        'vc_alias',
        'active',
        'gravatar',
        'external',
        'country_id',
        'deleted_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'birthday' => 'date:Y-m-d',
            'deleted_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function commune(): BelongsTo
    {
        return $this->belongsTo(Commune::class);
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function establishment(): BelongsTo
    {
        return $this->belongsTo(Establishment::class);
    }

    public function organizationalUnit(): BelongsTo
    {
        return $this->belongsTo(OrganizationalUnit::class);
    }

    /**
     * Definición del accessor para obtener el nombre corto del modelo.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function shortName(): Attribute
    {
        return Attribute::make(
            get: fn () => implode(' ', [
                $this->firstName,
                mb_convert_case($this->fathers_family, MB_CASE_TITLE, 'UTF-8'),
                mb_convert_case($this->mothers_family, MB_CASE_TITLE, 'UTF-8'),
            ]),
        );
    }

    /**
     * Definición del accessor para obtener el primer nombre del modelo.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function firstName(): Attribute
    {
        return Attribute::make(
            get: function () {
                $names = explode(' ', trim(mb_convert_case($this->name, MB_CASE_TITLE, 'UTF-8')));
    
                // Considera solo los nombres que empiezan con María (o Maria) y pueden incluir
                // prefijos como De, Del, Los, Las.
                $allowedPrefixes = ['De', 'Del', 'Los', 'Las'];
                $firstName = $names[0]; // El primer nombre por defecto

                if ($firstName === 'María' || $firstName === 'Maria') {
                    // Añade los nombres/prefijos adicionales según las condiciones.
                    for ($i = 1; $i < min(4, count($names)); $i++) {
                        if (in_array($names[$i], $allowedPrefixes) || $i === 1) {
                            $firstName .= " {$names[$i]}";
                        } else {
                            break; // Sal del bucle si el nombre no cumple con los criterios.
                        }
                    }
                }
    
                return $firstName;
            },
        );
    }
}
