<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    
    public function up(): void
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->string('product_title');
            $table->double('product_price');
            $table->integer('quantity');
            $table->timestamps();
        });
    }

  
    
    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};
