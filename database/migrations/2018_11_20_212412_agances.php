<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Agances extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agances', function (Blueprint $table) {
            $table->increments('id');
           // $table->Integer('user_id')->unsign()->index();
           // $table->unsignedBigInteger('user_id');
           $table->integer('user_id')->unsigned();
           $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
           // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('kindofcarhave');
            $table->double('price');
            $table->longtext('description');
            $table->string('agancename');
            $table->string('filename');
            $table->string('mime');
            $table->string('original_filename');
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
         Schema::dropIfExists('agances');
    }
}
