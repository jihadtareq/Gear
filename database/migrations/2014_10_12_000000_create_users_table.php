<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
           // $table->string('first_name');
           //$table->string('middle_name');
            $table->string('last_name');
            $table->string('mobile')->unique();
            $table->string('email')->unique();
            $table->string('address');
            $table->double('address_lat');
            $table->double('address_long');
            $table->string('api_token', 60);
            //$table->enum('KindOfCars',['Kia','BMW','Peugeot','Geely','Nissan','Mercedes-Benz','Chevrolet','Hummar','Jeep','Audi','Dodge','FAIT','Ford','Honda','Hyundai','Isuzu','Reunalt','Mitsubishi']);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->bigInteger('id_number');
            $table->bigInteger('type');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
