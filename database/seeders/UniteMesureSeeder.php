<?php

namespace Database\Seeders;

use App\Models\UniteMesure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UniteMesureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        UniteMesure::updateOrCreate([
            'name'=>'kilo'
        ]);
        UniteMesure::updateOrCreate([
            'name'=>'piece'
        ]);
        UniteMesure::updateOrCreate([
            'name'=>'paquet'
        ]);

    }
}
