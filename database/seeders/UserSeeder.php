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
            'first_name'=>'Jean Thierry',
            'last_name'=>'Havyarimana',
            'email'=>'jeanthierryh@gmail.com',
            'telephone'=>'61059053',
            'password'=>Hash::make(11111111),
        ]);
    }
}
