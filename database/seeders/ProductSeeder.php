<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Product::factory()->count(1000)->create();
        for($i=0;$i<=999;){
            $i++;
            Product::updateOrCreate([
                'id'=>$i,
                'category_id'=> rand(1,3),
                'unite_mesure_id'=> rand(1,3),
                'name'=> 'Product_'.$i,
                'prix'=> rand(100, 50000),
                'qte_minimal'=> 5,
                'qte_disponible'=>rand(5, 100),
                'photo'=>'photo_'.$i.'.jpg'
            ]);
        }

    }
}
