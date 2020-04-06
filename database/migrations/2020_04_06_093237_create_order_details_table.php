<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderDetails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('OrderID')->constrain();
            $table->foreignId('ProductID')->constrain();
            $table->decimal('UnitPrice');
            $table->integer('Quantity');
            $table->float('Discount');

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
        Schema::dropIfExists('orderDetails');
    }
}
