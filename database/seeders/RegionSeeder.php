<?php

namespace Database\Seeders;

use App\Models\Parameter\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Region::create(['name'=>'Región De Tarapacá']);
        Region::create(['name'=>'Región De Antofagasta']);
        Region::create(['name'=>'Región De Atacama']);
        Region::create(['name'=>'Región De Coquimbo']);
        Region::create(['name'=>'Región De Valparaíso']);
        Region::create(['name'=>'Región Del Libertador Gral. B. OHiggins']);
        Region::create(['name'=>'Región Del Maule']);
        Region::create(['name'=>'Región Del Bíobío']);
        Region::create(['name'=>'Región De La Araucanía']);
        Region::create(['name'=>'Región De Los Lagos']);
        Region::create(['name'=>'Región De Aysén del General Carlos Ibañez del Campo']);
        Region::create(['name'=>'Región De Magallanes y de la Antártica Chilena']);
        Region::create(['name'=>'Región Metropolitana de Santiago']);
        Region::create(['name'=>'Región De Los Ríos']);
        Region::create(['name'=>'Región De Arica Parinacota']);
        Region::create(['name'=>'Región De Ñuble']);
    }
}
