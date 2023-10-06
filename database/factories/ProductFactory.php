<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{

    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return[];

        // for($i=0;$i<999;$i++){
        //     return [
        //         'category_id'=> rand(1,3),
        //         'unite_mesure_id'=> rand(1,3),
        //         'name'=> 'Product_'.$i+1,
        //         'prix'=> rand(100, 50000),
        //         'qte_minimal'=> 5,
        //         'qte_disponible'=>rand(5, 100)
        //     ];
        // }

        // $product = Product::all();

        // if($product->isEmpty()){
        //     return [
        //         'category_id'=> rand(1,3),
        //         'unite_mesure_id'=> rand(1,3),
        //         'name'=> 'Product_'.'1',
        //         'prix'=> rand(100, 50000),
        //         'qte_minimal'=> 5,
        //         'qte_disponible'=>rand(5, 100)
        //     ];
        // }else{

        //     return [
        //         'category_id'=> rand(1,3),
        //         'unite_mesure_id'=> rand(1,3),
        //         'name'=> 'Product_'.$product->last()->id+1,
        //         'prix'=> rand(100, 50000),
        //         'qte_minimal'=> 5,
        //         'qte_disponible'=>rand(5, 100)
        //     ];
        // }


    }
}
