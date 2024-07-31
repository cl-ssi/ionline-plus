<?php

namespace App\Filament\Imports\Eqm;

use App\Models\Eqm\Brand;
use App\Models\Eqm\Vehicle;
use App\Models\Parameter\Region;
use Filament\Actions\Imports\Importer;
use App\Models\Parameter\Establishment;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Models\Import;

class VehicleImporter extends Importer
{
    protected static ?string $model = Vehicle::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('region')
                ->relationship(resolveUsing: 'name'),
            ImportColumn::make('establishment')
                ->relationship(resolveUsing: 'name'),
            ImportColumn::make('body_type')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('ambulance_type')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('ambulance_class')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('samu')
                ->requiredMapping()
                ->boolean()
                ->rules(['required', 'boolean']),
            ImportColumn::make('function')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('brand')
                ->relationship(resolveUsing: 'name'),
            ImportColumn::make('model')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('license_plate')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('engine_number')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('mileage')
                ->numeric()
                ->rules(['integer']),
            ImportColumn::make('ownership_status')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('conservation_status')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('acquisition_year')
                ->requiredMapping()
                ->rules(['required']),
            ImportColumn::make('useful_life')
                ->requiredMapping()
                ->numeric()
                ->rules(['required', 'integer']),
            ImportColumn::make('residual_useful_life')
                ->requiredMapping()
                ->numeric()
                ->rules(['required', 'integer']),
            ImportColumn::make('critical')
                ->requiredMapping()
                ->boolean()
                ->rules(['required', 'boolean']),
            ImportColumn::make('under_warranty')
                ->requiredMapping()
                ->boolean()
                ->rules(['required', 'boolean']),
            ImportColumn::make('warranty_expiry_year')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
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

    public function resolveRecord(): ?Vehicle
    {
        $data = $this->data;

        // Ensure relationships are created if they do not exist
        if (!empty($data['region'])) {
            // $region = Region::firstOrCreate(['name' => $data['region']]);
            $region = Region::where('name',$data['region'])->first();
            $data['region_id'] = $region->id;
        }

        if (!empty($data['establishment'])) {
            // $establishment = Establishment::firstOrCreate(['name' => $data['establishment']]);
            $establishment = Establishment::where('name',$data['establishment'])->first();
            $data['establishment_id'] = $establishment->id;
        }

        if (!empty($data['brand'])) {
            $brand = Brand::firstOrCreate(['name' => $data['brand']]);
            $data['brand_id'] = $brand->id;
        }

        // Create or update the Equipment record
        return Vehicle::updateOrCreate(
            ['body_type' => $data['body_type'],
            'brand_id' => $data['brand_id'],
            'model' => $data['model'],
            'license_plate' => $data['license_plate'],], // Criteria for updating existing records
            $data
        );

        // return new Vehicle();
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your vehicle import has completed and ' . number_format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}
