<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SpareParts extends Migration
{
    /**
     * Run the migrations.grby td5ly data kda

     *
     * @return void
     */
    public function up()
    {

        Schema::create('spareparts', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('user_id')->unsign()->index();
          // $table->integer('sparepartsvendors_id')->unsigned();
            //$table->foreign('sparepartsvendors_id')->references('id')->on('sparepartsvendors')->onDelete('cascade')->nullable(); //Cascade will delete everything relate to the id which deleted 
            //on other meaning it would delete everything related to this id 
            $table->text('sparepart');
            $table->double('price');
            $table->longtext('description');
            $table->string('storename');
            $table->string('filename')->nullable();
            $table->string('mime')->nullable();
            $table->string('original_filename')->nullable();
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
        
        Schema::dropIfExists('spareparts');
    }
}
