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
            $table->id();
            $table->string('cart_id');
            $table->string('product_name');
            $table->string('computer_size')->nullable();
            $table->string('computer_ram')->nullable();
            $table->string('operating_system')->nullable();
            $table->string('display_size')->nullable();
            $table->string('port_number')->nullable();
            $table->string('hdmi_port')->nullable();
            $table->string('price');
            $table->string('keywords');
            $table->longText('description');
            $table->string('status')->nullable();
            $table->string('image');
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
