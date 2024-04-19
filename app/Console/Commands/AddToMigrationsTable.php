<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class AddToMigrationsTable extends Command
{
    protected $signature = 'custom:insert-migrations';
    protected $description = 'Insert specified migrations into the migrations table';

    protected $migrationPaths = [
        '0001_01_01_000001_create_countries_table.php',
        '0001_01_01_000002_create_regions_table.php',
        '0001_01_01_000003_create_communes_table.php',
        '0001_01_01_000004_create_health_services_table.php',
        '0001_01_01_000005_create_establishment_types_table.php',
        '0001_01_01_000006_create_establishments_table.php',
        '0001_01_01_000007_create_organizational_units_table.php',
        '0001_01_01_000008_create_users_table.php',
        '0001_01_01_000009_create_cache_table.php',
        '0001_01_01_000010_create_jobs_table.php',
        '0001_01_01_000011_create_permission_tables.php',
        '2024_04_08_203831_create_authorities_table.php',
        '2024_04_08_204615_create_audits_table.php',
        '2024_04_10_013749_create_types_table.php',
        '2024_04_10_014224_create_documents_table.php',
        '2024_04_11_101534_create_estaments_table.php',
        '2024_04_11_101541_create_professions_table.php',
        '2024_04_12_230144_create_endorse_types_table.php',
        '2024_04_12_231016_create_approvals_table.php',
        '2024_04_12_231059_create_signature_requests_table.php',
        '2024_04_12_232605_create_files_table.php',
    ];

    public function handle()
    {
        foreach ($this->migrationPaths as $path) {
            $this->insertMigration($path);
        }

        $this->info('Migrations inserted successfully.');
    }

    protected function insertMigration($path)
    {
        $file = basename($path);
        $migrationName = str_replace('.php', '', $file);

        // Check if migration is already in the database
        $existingMigration = DB::table('migrations')->where('migration', $migrationName)->first();

        if (!$existingMigration) {
            // Insert migration if not already present
            DB::table('migrations')->insert([
                'migration' => $migrationName,
                'batch' => 191, // You can adjust the batch number as needed
            ]);
        }
    }
}
