<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mechanics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {      

     Schema::create('mechanics', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('admin_id')->unsigned()->nullable();
            //$table->foreign('admin_id')->references('id')->on('admins')->nullable();
            $table->string('name_shop');
            $table->string('mobile')->unique();
            $table->double('address_lat');
            $table->double('address_long');
            $table->time('worktime_from');
            $table->time('worktime_to');
            $table->enum('Wash',['Yes','No']);
            $table->string('kindofcartofix');
            $table->string('description');
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
         Schema::dropIfExists('mechanics');
    }
}
