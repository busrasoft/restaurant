<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('ProductName');
            $table->foreignId('SupplierID')->constrain();
            $table->foreignId('CategoryID')->constrain();
            $table->string('QuantityPerUnit')->nullable();
            $table->decimal('UnitPrice', 19, 4)->nullable();
            $table->integer('UnitsInStock', 0)->nullable();
            $table->integer('UnitsOnOrder', 0)->nullable();
            $table->integer('ReorderLevel', 0)->nullable();
            $table->tinyInteger('Discontinued', 0)->nullable();
            $table->timestamps();
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
