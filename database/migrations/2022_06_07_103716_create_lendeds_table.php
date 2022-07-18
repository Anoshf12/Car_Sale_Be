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
        Schema::create('lendeds', function (Blueprint $table) {
            $table->increments('lendeds_id');
            $table->string('lendeds_name');
            $table->string('lendeds_contact');
            $table->string('lendeds_address');
            $table->string('lendeds_nic');
            $table->string('lendeds_email');
            $table->string('model');
            $table->string('chassis_no');
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
        Schema::dropIfExists('lendeds');
    }
};
