<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::updateOrCreate([
            'role_id'=> 1,
            'first_name'=> 'Jean Thierry',
            'last_name'=> 'Havyarimana',
            'pseudo'=> 'tijo',
            'email'=> 'jeanthierryh@gmail.com',
            'password'=> Hash::make(11111111),
            'telephone'=>'+25761059053'
        ]);
        User::updateOrCreate([
            'role_id'=> 2,
            'first_name'=> 'Guy-Michel',
            'last_name'=> 'Iryikirundi',
            'pseudo'=> 'igicocoro',
            'email'=> 'guymichel@gmail.com',
            'password'=> Hash::make(11111111),
            'telephone'=>'+25768381368'
        ]);
    }
}
