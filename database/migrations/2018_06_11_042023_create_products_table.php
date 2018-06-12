<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {

            $table->increments('id');

            $table->unsignedInteger('category_id');

            $table->foreign('category_id')->references('id')->on('product_categories');

            $table->unsignedInteger('colour_id');

            $table->foreign('colour_id')->references('id')->on('product_colours');

            $table->string('product_name');

            $table->integer('product_price');

            $table->integer('product_inventory');

            $table->string('product_desc');

            $table->string('product_image');


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
        Schema::dropIfExists('products');
    }
}
