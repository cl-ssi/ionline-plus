<?php

namespace Database\Seeders;

use App\Models\Document\Signature\EndorseType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EndorseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EndorseType::create(['name' => 'No requiere visación']);
        EndorseType::create(['name' => 'Visación opcional']);
        EndorseType::create(['name' => 'Visación en cadena de responsabilidad']);
    }
}
