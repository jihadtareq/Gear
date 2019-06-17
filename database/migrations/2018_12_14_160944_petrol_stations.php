<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Petrolstations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petrol_stations', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('admin_id')->unsigned()->nullable();
            //$table->foreign('admin_id')->references('id')->on('admins')->nullable();
            $table->double('address_lat');
            $table->double('address_long');
            $table->string('nameofpetrolstation');
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
        Schema::dropIfExists('petrol_stations');
    }
}
