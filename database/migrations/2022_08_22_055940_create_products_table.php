<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\ProductCategory;
class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
             //id del procucto
             $table->id();
             //nombre del producto
             $table->string('ProductName', 100);
             //referencia del producto
             $table->string('Reference', 100);
             //precio
             $table->integer('Price');
             //Stock
             $table->smallInteger('Stock');
             //Peso en gramos
             $table->integer('Weigt');
             //ID de la categoria del procucto
             $table->foreignIdFor(ProductCategory::class);
             //Fecha de la venta con zona horaria en caso de que haya sedes internacionales
             $table->dateTimeTz('CreatedAt', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
