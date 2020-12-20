<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersDetailedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_detailed', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_orders')->unsigned();
            $table->foreign('id_orders')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_produk')->unsigned();
            $table->foreign('id_produk')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('jml_produk');
            $table->integer('total_harga');
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
        Schema::dropIfExists('orders_detailed');
    }
}
