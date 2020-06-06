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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_name')->unique();
            $table->string('slug_name')->unique();
            $table->string('property_type');
            $table->integer('year_built');
            $table->integer('sqr_ft');
            $table->integer('bed');
            $table->integer('bath');
            $table->string('location');
            $table->string('property_status');
			$table->integer('price_per_sqft');
            $table->string('total_price');
            $table->string('phone');
            $table->string('email');
            $table->string('more_info',10000);
            $table->string('image_gallery',3000);

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
