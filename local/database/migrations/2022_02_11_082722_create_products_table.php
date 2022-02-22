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
            $table->increments('id');
            $table->string('product_name_th');
            $table->string('product_name_en');
            $table->string('product_detail');
            $table->string('product_pics', 60);
            $table->string('capsule', 50);
            $table->string('retail_price', 50);
            $table->string('member_price', 50);
            $table->string('pv', 50);
            $table->string('FDA_No', 20);
            $table->integer('product_type_id');
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
