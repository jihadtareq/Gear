<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Favorites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
       Schema::create('favorites', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->integer('sparepart_id')->unsigned();
          $table->foreign('sparepart_id')->references('id')->on('spareparts')->onDelete('cascade');
          $table->integer('car_id')->unsigned();
          $table->foreign('car_id')->references('id')->on('agances')->onDelete('cascade');
          $table->integer('user_id')->unsigned();
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('favorites');    }
}
