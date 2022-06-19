<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('products')){
            Schema::create('products', function (Blueprint $table) {
                $table->increments('id')->unsigned();
                $table->string("title");
               // $table->string("slug",191)->unique();
                $table->string("description");
                $table->double("price",8,2)->default(0);
                $table->double("old_price",8,2)->default(0);
                $table->integer("in_stock")->default(0);
                $table->integer("qty")->default(0);
                $table->string("image");
                $table->integer("category_id")->unsigned();
                $table->integer("user_id")->unsigned()->default(0);
                $table->timestamps();
                $table->foreign("category_id")->references("id")->on("categories")->onDelete("cascade");;
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
        Schema::dropIfExists('products');
    }
}
