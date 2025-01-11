<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->string('serial_number');
            $table->integer('quantity');
            $table->string('buyer_name');
            $table->string('email');
            $table->string('phone');
            $table->enum('purchase_location', ['Online', 'Offline'])->default('Online');
            $table->enum('order_status', ['Diproses', 'Dikirim', 'Diterima'])->default('Diproses');
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
        Schema::dropIfExists('sales');
    }
};
