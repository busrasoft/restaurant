<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();   
            $table->string('CompanyName');
            $table->string('ContactName')->nullable();
            $table->string('ContactTitle')->nullable();
            $table->string('Address')->nullable();
            $table->string('City')->nullable();
            $table->string('Region')->nullable();
            $table->string('PostalCode')->nullable();
            $table->string('Country')->nullable();
            $table->string('Phone')->nullable();
            $table->string('Picture')->nullable();
            $table->string('Fax')->nullable();
            $table->string('Image')->nullable();
            $table->string('ImageThumbnail')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
