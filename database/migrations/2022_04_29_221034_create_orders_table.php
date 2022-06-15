<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('orders')){
            Schema::create('orders', function (Blueprint $table) {
                $table->increments('id')->unsigned();
                $table->integer("user_id")->unsigned()->nullable();
                $table->string("product_name");
                $table->double("total",8,2);
                $table->boolean("paid")->default(0);
                $table->boolean("delivered")->default(0);
                $table->timestamps();
                $table->foreign("user_id")
                      ->references("id")
                      ->on("users")
                      ->onDelete("cascade");
                // $table->foreign("user_id")->references("id")->on("users");
            });

        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
