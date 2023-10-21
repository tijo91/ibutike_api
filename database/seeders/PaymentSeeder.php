<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Payment::updateOrCreate([
            'name'=>'cash'
        ]);

        Payment::updateOrCreate([
            'name'=>'credit'
        ]);
    }
}
