<?php

namespace Database\Seeders;
use Faker\Factory;
use Illuminate\Database\Seeder;
use App\Models\Products;
use App\Models\ProductCategory;
class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        Products::insert([
            'ProductName'=>"Asus rog flow",
            'Reference'=>$faker->unique->isbn13(),
            'Price'=>$faker->numberBetween(10000, 11000000),
            'Weigt'=>$faker->numberBetween(100, 30000),
            'Stock'=>$faker->numberBetween(10, 30),
            'product_category_id'=>ProductCategory::select('id')->where("CategoryName",'Portatiles')->first()->id,
            'CreatedAt'=>date("Y-m-d H:i:s"),
        ]);
        Products::insert([
            'ProductName'=>"Fresas",
            'Reference'=>$faker->unique->isbn13(),
            'Price'=>$faker->numberBetween(10000, 11000000),
            'Weigt'=>$faker->numberBetween(100, 30000),
            'Stock'=>$faker->numberBetween(10, 30),
            'product_category_id'=>ProductCategory::select('id')->where("CategoryName",'Frutas')->first()->id,
            'CreatedAt'=>date("Y-m-d H:i:s"),
        ]);
        Products::insert([
            'ProductName'=>"Frijoles",
            'Reference'=>$faker->unique->isbn13(),
            'Price'=>$faker->numberBetween(10000, 11000000),
            'Weigt'=>$faker->numberBetween(100, 30000),
            'Stock'=>$faker->numberBetween(10, 30),
            'product_category_id'=>ProductCategory::select('id')->where("CategoryName",'Granos')->first()->id,
            'CreatedAt'=>date("Y-m-d H:i:s"),
        ]);
        Products::insert([
            'ProductName'=>"Leche",
            'Reference'=>$faker->unique->isbn13(),
            'Price'=>$faker->numberBetween(10000, 11000000),
            'Weigt'=>$faker->numberBetween(100, 30000),
            'Stock'=>$faker->numberBetween(10, 30),
            'product_category_id'=>ProductCategory::select('id')->where("CategoryName",'Lacteos')->first()->id,
            'CreatedAt'=>date("Y-m-d H:i:s"),
        ]);
        Products::insert([
            'ProductName'=>"UNO juego de cartas",
            'Reference'=>$faker->unique->isbn13(),
            'Price'=>$faker->numberBetween(10000, 11000000),
            'Weigt'=>$faker->numberBetween(100, 30000),
            'Stock'=>$faker->numberBetween(10, 30),
            'product_category_id'=>ProductCategory::select('id')->where("CategoryName",'juguetes')->first()->id,
            'CreatedAt'=>date("Y-m-d H:i:s"),
        ]);
        Products::insert([
            'ProductName'=>"Nintendo swich",
            'Reference'=>$faker->unique->isbn13(),
            'Price'=>$faker->numberBetween(10000, 11000000),
            'Weigt'=>$faker->numberBetween(100, 30000),
            'Stock'=>$faker->numberBetween(10, 30),
            'product_category_id'=>ProductCategory::select('id')->where("CategoryName",'Consolas')->first()->id,
            'CreatedAt'=>date("Y-m-d H:i:s"),
        ]);
        Products::insert([
            'ProductName'=>"Raqueta de tenis",
            'Reference'=>$faker->unique->isbn13(),
            'Price'=>$faker->numberBetween(10000, 11000000),
            'Weigt'=>$faker->numberBetween(100, 30000),
            'Stock'=>$faker->numberBetween(10, 30),
            'product_category_id'=>ProductCategory::select('id')->where("CategoryName",'Deporte')->first()->id,
            'CreatedAt'=>date("Y-m-d H:i:s"),
        ]);
        Products::insert([
            'ProductName'=>"Lavadora",
            'Reference'=>$faker->unique->isbn13(),
            'Price'=>$faker->numberBetween(10000, 11000000),
            'Weigt'=>$faker->numberBetween(100, 30000),
            'Stock'=>$faker->numberBetween(10, 30),
            'product_category_id'=>ProductCategory::select('id')->where("CategoryName",'Electrodomesticos')->first()->id,
            'CreatedAt'=>date("Y-m-d H:i:s"),
        ]);
        Products::insert([
            'ProductName'=>"Chocolatina jet",
            'Reference'=>$faker->unique->isbn13(),
            'Price'=>$faker->numberBetween(10000, 11000000),
            'Weigt'=>$faker->numberBetween(100, 30000),
            'Stock'=>$faker->numberBetween(10, 30),
            'product_category_id'=>ProductCategory::select('id')->where("CategoryName",'Dulces')->first()->id,
            'CreatedAt'=>date("Y-m-d H:i:s"),
        ]);
        Products::insert([
            'ProductName'=>"Libra de carne",
            'Reference'=>$faker->unique->isbn13(),
            'Price'=>$faker->numberBetween(10000, 11000000),
            'Weigt'=>$faker->numberBetween(100, 30000),
            'Stock'=>$faker->numberBetween(10, 30),
            'product_category_id'=>ProductCategory::select('id')->where("CategoryName",'Carnes')->first()->id,
            'CreatedAt'=>date("Y-m-d H:i:s"),
        ]);
    }
}
