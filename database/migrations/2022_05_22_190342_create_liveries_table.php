<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liveries', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->text('adress');
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
        Schema::dropIfExists('liveries');
    }
}
