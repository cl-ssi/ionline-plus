<?php

namespace App\Models\Parameter;

use App\Models\Parameter\Commune;
use App\Models\Parameter\EstablishmentType;
use App\Models\Parameter\HealthService;
use App\Models\Rrhh\OrganizationalUnit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Collection;
use OwenIt\Auditing\Contracts\Auditable;

class Establishment extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    protected $table = 'establishments';

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

    public function fatherOrganizationalUnit(): BelongsTo
    {
        return $this->belongsTo(OrganizationalUnit::class, 'father_organizational_unit_id');
    }


    /**
     * Get Establishment Logo public path
     */
    public function getLogoPublicPathAttribute()
    {
        /** Confeccionar URL pública del logo */
        /** El código está acá para poder reutilizar este include en otro documento
         * EJ:  
         * '/images/logo_rgb_SSI.png'
         * '/images/logo_pluma_SSI_HAH.png'
         * 
         */
        $logo = '/images/logo_';

        $logo .= 'rgb_';

        if ( $this->mother ) {
            $logo .= $this->mother->alias . '_';
        }

        $logo .= $this->alias . '.png';
        return public_path($logo);
    }

    public function buildTree(): Collection
    {
        // Carga todos los OrganizationalUnits y sus relaciones child
        // Asegúrate de cargar también los hijos recursivamente si es necesario
        $units = OrganizationalUnit::where('establishment_id', $this->id)
                                    ->with(['childs' => function ($query) {
                                        $query->orderBy('name');
                                    }])
                                    ->orderBy('name')
                                    ->get();
    
        // Filtra para obtener solo los nodos raíz (suponiendo que 'organizational_unit_id' es nulo para los raíces)
        $rootUnits = $units->whereNull('organizational_unit_id');
    
        // Construye el árbol a partir de los nodos raíz, empezando desde el nivel 0
        return $this->buildTreeFromResults($rootUnits, 1);
    }
    
    public function buildTreeFromResults($results, $depth): Collection
    {
        $tree = collect();

        foreach ($results as $result) {
            $node = $this->buildNode($result, $depth);
            $tree->push($node);
        }

        return $tree;
    }
    
    public function buildNode($unit, $depth): array
    {
        $node = [
            'name'     => $unit->name,  // Suponiendo que 'name' es el atributo que quieres mostrar
            'value'    => $unit->id,
            'parent'   => $unit->organizational_unit_id, // o null si es un nodo raíz
            'depth'    => $depth, // Añade la profundidad actual al nodo
        ];

        if ($unit->childs->isNotEmpty()) {
            $children = collect();
    
            // Ordena los hijos alfabéticamente antes de procesarlos
            $sortedChildren = $unit->childs->sortBy('name');

            foreach ($sortedChildren as $child) {
                $childNode = $this->buildNode($child, $depth + 1); // Incrementa la profundidad para los hijos
                $children->push($childNode);
            }

            $node['children'] = $children->toArray();
        }

        return $node;
    }

    public function buildTreeArray(): array
    {
        // Primero, construye el árbol utilizando la función buildTree
        $tree = $this->buildTree();
    
        // Ahora, recopila los IDs en un array en el orden establecido por el árbol
        $ids = $this->extractIdsFromTree($tree);
    
        return $ids;
    }
    
    /**
     * Recursivamente extrae los IDs de cada nodo en el árbol
     * @param Collection $tree
     * @return array
     */
    private function extractIdsFromTree(Collection $tree): array
    {
        $ids = [];
    
        foreach ($tree as $node) {
            // Agrega el ID del nodo actual al array de IDs
            $ids[] = $node['value'];  // Asumiendo que 'value' contiene el ID
    
            // Si el nodo tiene hijos, recursivamente obtén sus IDs y agrégalos al array
            if (!empty($node['children'])) {
                $ids = array_merge($ids, $this->extractIdsFromTree(collect($node['children'])));
            }
        }
    
        return $ids;
    }
    
}
