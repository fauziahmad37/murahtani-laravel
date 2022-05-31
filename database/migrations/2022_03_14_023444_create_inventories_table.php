<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->double('sell_price')->default(0);
            $table->double('average_buy_price')->default(0);
            $table->double('first_stock')->default(0);
            $table->double('first_amount')->default(0);
            $table->double('stock_in')->default(0);
            $table->double('in_amount')->default(0);
            $table->double('stock_out')->default(0);
            $table->double('out_amount')->default(0);
            $table->double('last_stock')->default(0);
            $table->double('last_amount')->default(0);
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventories');
    }
}
