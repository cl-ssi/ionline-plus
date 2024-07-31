<?php

namespace App\Filament\Imports\Eqm;

use App\Models\Eqm\Infrastructure;
use App\Models\Parameter\Location; // Modelo para 'location'
use App\Models\Parameter\Place; // Modelo para 'place'
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;

class InfrastructureImporter extends Importer
{
    protected static ?string $model = Infrastructure::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('place')
                ->relationship(resolveUsing: 'name'),
            ImportColumn::make('location')
                ->relationship(resolveUsing: 'name'),
            ImportColumn::make('infrastructure_element_or_specialty')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('intervention_type_description')
                ->requiredMapping()
                ->rules(['required']),
            ImportColumn::make('quantity')
                ->requiredMapping()
                ->numeric()
                ->rules(['required', 'integer']),
            ImportColumn::make('condition')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('norm_accreditation_or_not_applicable')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('under_warranty')
                ->requiredMapping()
                ->boolean()
                ->rules(['required', 'boolean']),
            ImportColumn::make('warranty_expiry_year')
                ->requiredMapping()
                ->rules(['required']),
            ImportColumn::make('under_maintenance_plan')
                ->requiredMapping()
                ->boolean()
                ->rules(['required', 'boolean']),
            ImportColumn::make('year_entered_maintenance_plan')
                ->requiredMapping()
                ->rules(['required']),
            ImportColumn::make('internal_or_external_maintenance')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('provider_or_internal_maintenance')
                ->rules(['max:255']),
            ImportColumn::make('maintenance_agreement_id_or_reference')
                ->rules(['max:255']),
            ImportColumn::make('annual_maintenance_cost')
                ->requiredMapping()
                ->numeric()
                ->rules(['required', 'integer']),
            ImportColumn::make('annual_maintenance_frequency')
                ->requiredMapping()
                ->numeric()
                ->rules(['required', 'integer']),
        ];
    }

    public function resolveRecord(): ?Infrastructure
    {
        $data = $this->data;

        // Ensure relationships are created if they do not exist
        if (!empty($data['location'])) {
            $location = Location::firstOrCreate(['name' => $data['location']]);
            $data['location_id'] = $location->id;
        }

        if (!empty($data['place'])) {
            $place = Place::firstOrCreate(
                ['name' => $data['place']],
                ['location_id' => $location->id]
            );
            $data['place_id'] = $place->id;
        }

        // if (!empty($data['category'])) {
        //     $category = Category::firstOrCreate(['name' => $data['category']]);
        //     $data['category_id'] = $category->id;
        // }

        // if (!empty($data['subcategory'])) {
        //     $subcategory = Subcategory::firstOrCreate(['name' => $data['subcategory']]);
        //     $data['subcategory_id'] = $subcategory->id;
        // }

        // if (!empty($data['brand'])) {
        //     $brand = Brand::firstOrCreate(['name' => $data['brand']]);
        //     $data['brand_id'] = $brand->id;
        // }

        // if (!empty($data['supplier'])) {
        //     $supplier = Supplier::firstOrCreate(['name' => $data['supplier']]);
        //     $data['supplier_id'] = $supplier->id;
        // }

        // Create or update the Equipment record
        return Infrastructure::updateOrCreate(
            ['place_id' => $data['place_id'],
            'location_id' => $data['location_id'],
            'infrastructure_element_or_specialty' => $data['infrastructure_element_or_specialty']], // Criteria for updating existing records
            $data
        );

        // return new Infrastructure();
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your infrastructure import has completed and ' . number_format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}
