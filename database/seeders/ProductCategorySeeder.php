<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductCategory;
class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $Categorias_de_productos=ProductCategory::create(["CategoryName"=>"Frutas"]);
            $Categorias_de_productos=ProductCategory::create(["CategoryName"=>"Verduras"]);
            $Categorias_de_productos=ProductCategory::create(["CategoryName"=>"Enlatados"]);
            $Categorias_de_productos=ProductCategory::create(["CategoryName"=>"Harinas"]);
            $Categorias_de_productos=ProductCategory::create(["CategoryName"=>"Carnes"]);
            $Categorias_de_productos=ProductCategory::create(["CategoryName"=>"Dulces"]);
            $Categorias_de_productos=ProductCategory::create(["CategoryName"=>"Granos"]);
            $Categorias_de_productos=ProductCategory::create(["CategoryName"=>"Lacteos"]);
            $Categorias_de_productos=ProductCategory::create(["CategoryName"=>"Deporte"]);
            $Categorias_de_productos=ProductCategory::create(["CategoryName"=>"juguetes"]);
            $Categorias_de_productos=ProductCategory::create(["CategoryName"=>"Consolas"]);
            $Categorias_de_productos=ProductCategory::create(["CategoryName"=>"Hogar"]);
            $Categorias_de_productos=ProductCategory::create(["CategoryName"=>"Electrodomesticos"]);
            $Categorias_de_productos=ProductCategory::create(["CategoryName"=>"Computadoras"]);
            $Categorias_de_productos=ProductCategory::create(["CategoryName"=>"Portatiles"]);

    }
}
