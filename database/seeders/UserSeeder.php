<?php

namespace Database\Seeders;

use App\Models\Rrhh\OrganizationalUnit;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ou = OrganizationalUnit::first();

        $user = new User();
        $user->id = 12345678;
        $user->dv = 9;
        $user->name = "Administrador";
        $user->fathers_family = "Paterno";
        $user->mothers_family = "Materno";
        $user->password = bcrypt('admin');
        $user->position = "Administrator";
        $user->email = "sistemas.sst@redsalud.gob.cl";
        $user->organizationalUnit()->associate($ou);
        $user->save();
        $user->assignRole('god');
    }
}
