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
    public function up(): void
    {
        Schema::create('product',function(Blueprint $table){
            $table->id('product_id');
            $table->string('product_name');
            $table->decimal('product_price');
            $table->string('product_status');
            $table->string('product_image');
            $table->timestamp('purchase_time');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
};
