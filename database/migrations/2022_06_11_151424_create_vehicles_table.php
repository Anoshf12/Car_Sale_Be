<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('brand');
            $table->string('model');
            $table->string('make');
            $table->integer('year_manufacture');
            $table->integer('year_registration');
            $table->string('ownership');
            $table->string('chassis_no');
            $table->string('fuel_type');
            $table->string('reg_no');
            $table->integer('mileage');
            $table->string('remarks');
            $table->decimal('cost', 16,2);
            $table->decimal('unit_price', 16,2);
            $table->decimal('margin');
            $table->integer('trans_no');
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
        Schema::dropIfExists('vehicles');
    }
};
