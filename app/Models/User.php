<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Parameter\Commune;
use App\Models\Parameter\Country;
use App\Models\Parameter\Establishment;
use App\Models\Resource\Telephone;
use App\Models\Rrhh\Authority;
use App\Models\Rrhh\OrganizationalUnit;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use OwenIt\Auditing\Contracts\Auditable;

class User extends Authenticatable implements FilamentUser, Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory, Notifiable, HasRoles, SoftDeletes;

    public function canAccessPanel(Panel $panel): bool
    {
        return true;
        // TODO: usar propiedad "active" cuando se implementen los usarios activos
        // return str_ends_with($this->email, '@redsalud.gob.cl');
    }

    public function canBeImpersonated()
    {
        // Let's prevent impersonating other users at our own company
        return auth()->user()->can('be god');
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

    public function telephones(): BelongsToMany
    {
        return $this->belongsToMany(Telephone::class, 'res_telephone_user')->withTimestamps();
    }

    /**
     * Get the user's first name.
     */
    protected function run(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => number_format(substr($value, 0, -1), 0, '', '.') . '-' . substr($value, -1),
        );
    }

    /**
     * Organizational Units where the user is manager.
     */
    public function isManagerOf(): BelongsToMany
    {
        return $this->belongsToMany(OrganizationalUnit::class,'rrhh_authorities','user_id','organizational_unit_id')
            ->as('authority')
            ->withPivot('position','type','decree','representation_id')
            ->wherePivot('type', Authority::TYPE_MANAGER)
            ->wherePivot('date', now()->startOfDay());
    }

    /**
     * Organizational Units where the user is secretary.
     */
    public function isSecretaryOf(): BelongsToMany
    {
        return $this->belongsToMany(OrganizationalUnit::class,'rrhh_authorities','user_id','organizational_unit_id')
            ->as('authority')
            ->withPivot('position','type','decree','representation_id')
            ->wherePivot('type', Authority::TYPE_SECRETARY)
            ->wherePivot('date', now()->startOfDay());
    }

    /**
     * Organizational Units where the user is delegate.
     */
    public function isDelegateOf(): BelongsToMany
    {
        return $this->belongsToMany(OrganizationalUnit::class,'rrhh_authorities','user_id','organizational_unit_id')
            ->as('authority')
            ->withPivot('position','type','decree','representation_id')
            ->wherePivot('type', Authority::TYPE_DELEGATE)
            ->wherePivot('date', now()->startOfDay());
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
