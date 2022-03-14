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
            $table->integer('product_id')->unique();
            $table->double('sell_price');
            $table->double('average_buy_price');
            $table->double('first_stock');
            $table->double('first_amount');
            $table->double('stock_in');
            $table->double('in_amount');
            $table->double('stock_out');
            $table->double('out_amount');
            $table->double('last_stock');
            $table->double('last_amount');
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
        Schema::dropIfExists('inventories');
    }
}
