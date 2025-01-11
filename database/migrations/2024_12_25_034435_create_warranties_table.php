<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('warranties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->string('serial_number');
            $table->string('buyer_name');
            $table->string('email');
            $table->string('phone');
            $table->date('purchase_time');
            $table->integer('warranty_duration');
            $table->timestamp('expiration_time')->nullable();
            $table->timestamps();
    
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }        

    public function down()
    {
        Schema::dropIfExists('warranties');
    }
};
