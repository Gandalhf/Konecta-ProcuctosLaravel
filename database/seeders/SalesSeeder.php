<?php

namespace Database\Seeders;
use App\Models\Sales;
use Illuminate\Database\Seeder;
use App\Models\Products;
use Faker\Factory;
class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   $faker = Factory::create();
        $productos =Products::all();
        for ($i=0; $i < count($productos); $i++) {
            Sales::create([
                'Sold'=>$faker->numberBetween(3, 10),
            'Products_id'=>$productos[$i]->id
        ]);
        }

    }
}
