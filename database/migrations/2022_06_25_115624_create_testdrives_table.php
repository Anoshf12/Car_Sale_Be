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
        Schema::create('testdrives', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('contact');
            $table->string('email');
            $table->string('profession');
            $table->string('address');
            $table->DATETIME('cus_req');
            $table->string('make');
            $table->string('brand');
            $table->string('model');
            $table->string('year_manufacture');
            $table->string('ownership');
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
        Schema::dropIfExists('testdrives');
    }
};
