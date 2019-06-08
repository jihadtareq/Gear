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
            $table->Integer('user_id')->unsign()->index();
            //$table->integer('agancesower_id')->unsigned();
           // $table->foreign('agancesower_id')->references('id')->on('agancesowners')->onDelete('cascade');
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
