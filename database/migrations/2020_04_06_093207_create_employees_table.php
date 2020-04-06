<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('LastName')->nullable();
            $table->string('FirstName')->nullable();
            $table->string('Title')->nullable();
            $table->string('TitleOfCourtesy')->nullable();
            $table->dateTime('BirthDate')->nullable();
            $table->dateTime('HireDate')->nullable();
            $table->string('Address')->nullable();
            $table->string('City')->nullable();
            $table->string('Region')->nullable();
            $table->string('PostalCode')->nullable();
            $table->string('Country')->nullable();
            $table->string('HomePhone')->nullable();
            $table->string('Extension')->nullable();
            $table->string('Photo')->nullable();
            $table->string('Notes')->nullable();
            $table->integer('ReportsTo')->nullable();

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
        Schema::dropIfExists('employees');
    }
}
