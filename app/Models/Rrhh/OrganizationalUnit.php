<?php

namespace App\Models\Rrhh;

use App\Models\Rrhh\Authority;
use App\Models\Document\Document;
use App\Models\Parameter\Establishment;
use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrganizationalUnit extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'organizational_units';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'level',
        'organizational_unit_id',
        'establishment_id',
        'sirh_function',
        'sirh_ou_id',
        'sirh_cost_center'
    ];

    public function establishment(): BelongsTo
    {
        return $this->belongsTo(Establishment::class);
    }

    public function organizationalUnit(): BelongsTo
    {
        return $this->belongsTo(OrganizationalUnit::class);
    }

    public function father(): BelongsTo
    {
        return $this->belongsTo(OrganizationalUnit::class, 'organizational_unit_id');
    }

    public function childs(): HasMany
    {
        return $this->hasMany(OrganizationalUnit::class, 'organizational_unit_id');
    }

    public function authorities(): HasMany
    {
        return $this->hasMany(Authority::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function documents(): HasMany
    {
        return $this->hasMany(Document::class);
    }

    /**
     * Get the OU short name.
     */
    protected function shortName(): Attribute
    {
        return Attribute::make(
            get: function (mixed $value, array $attributes) {
                // Reemplaza las palabras antes de cortar el string
                $value = $attributes['name'];
                $value = str_replace('Departamento de', 'D.', $value);
                $value = str_replace('Unidad de', 'U.', $value);
                $value = str_replace('Subdirección de', 'SD.', $value);
                
                // Retorna los primeros 40 caracteres del string resultante
                return substr($value, 0, 30).'.';
            },
        );
    }
    

    public function manager(): HasOneThrough
    {
        return $this->hasOneThrough(User::class, Authority::class, 'organizational_unit_id', 'id', 'id', 'user_id')
            ->where('type', Authority::TYPE_MANAGER)
            ->where('date', now()->startOfDay()->toDateString());
    }

    public function secretary(): HasOneThrough
    {
        return $this->hasOneThrough(User::class, Authority::class, 'organizational_unit_id', 'id', 'id', 'user_id')
            ->where('type', Authority::TYPE_SECRETARY)
            ->where('date', now()->startOfDay()->toDateString());
    }

    public function delegate(): HasOneThrough
    {
        return $this->hasOneThrough(User::class, Authority::class, 'organizational_unit_id', 'id', 'id', 'user_id')
            ->where('type', Authority::TYPE_DELEGATE)
            ->where('date', now()->startOfDay()->toDateString());
    }

    public function subrogations(): HasMany
    {
        // return $this->hasManyThrough(User::class, Subrogation::class, 'organizational_unit_id', 'id', 'id', 'user_id')
        //     ->where('type', Subrogation::TYPE_MANAGER)
        //     ->orderBy('level', 'asc');
        return $this->hasMany(Subrogation::class)
            ->orderBy('type')
            ->orderBy('level', 'asc');
    }

    public function managers(): HasManyThrough
    {
        return $this->hasManyThrough(User::class, Subrogation::class, 'organizational_unit_id', 'id', 'id', 'user_id')
            ->where('type', Subrogation::TYPE_MANAGER)
            ->orderBy('level', 'asc');
    }

}
