<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiptStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipt_stocks', function (Blueprint $table) {
            $table->id();
            $table->string('document_no')->unique();
            $table->string('receipt_no')->nullable();
            $table->integer('user_id');
            $table->integer('supplier_id');
            $table->string('status')->default('active');
            $table->date('tanggal_pembelian');
            $table->integer('ongkir')->default(0);
            $table->integer('amount')->default(0);
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
        Schema::dropIfExists('receipt_stocks');
    }
}
