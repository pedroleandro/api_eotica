<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            "name" => "ITALIA INDEPENDENT 90",
            "description" => "Óculos de Sol Italia Independent 0090 - Cinza Estampado Aveludado - Espelhado Cinza - 000/49",
            "brand" => "Italia Independent",
            "category" => "Óculos de Sol",
            "price" => 220.4,
            "color" => "Cinza"
        ]);

        Product::create([
            "name" => "ITALIA INDEPENDENT 0092C",
            "description" => "Óculos de Sol Italia Independent 0092C - Preto - 009/60",
            "brand" => "Italia Independent",
            "category" => "Óculos de Sol",
            "price" => 330.6,
            "color" => "Preto"
        ]);

        Product::create([
            "name" => "ITALIA INDEPENDENT 0900T",
            "description" => "Óculos de Sol Italia Independent 0900T - Preto Estampado - T/50",
            "brand" => "Italia Independent",
            "category" => "Óculos de Sol",
            "price" => 268.5,
            "color" => "Preto"
        ]);

        Product::create([
            "name" => "VOGUE VO5309L",
            "description" => "Óculos de Grau Vogue VO5309L - Vinho Transparente - 2798/54",
            "brand" => "Vogue",
            "category" => "Óculos de Grau",
            "price" => 162,
            "color" => "Vinho"
        ]);
    }
}
