<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('CustomerID')->constrain();
            $table->foreignId('EmployeeID')->constrain();
            $table->dateTime('OrderDate')->nullable();
            $table->dateTime('RequiredDate')->nullable();
            $table->dateTime('ShippedDate')->nullable();
            $table->integer('ShipVia')->nullable();
            $table->decimal('Freight')->nullable();
            $table->string('ShipName')->nullable();
            $table->string('ShipAddress')->nullable();
            $table->string('ShipCity')->nullable();
            $table->string('ShipRegion')->nullable();
            $table->string('ShipPostalCode')->nullable();
            $table->string('ShipCountry')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
