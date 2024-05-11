<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('tensp', 255);
            $table->string('img',255);
            $table->integer('price')->default(0);
            $table->integer('price_discount')->default(0);
            $table->integer('xem')->default(0);
            $table->boolean('hot')->default(0);
            $table->boolean('an_hien')->default(1);
            $table->boolean('tinh_chat')->default(0);
            $table->timestamps();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->string('categories', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');

    }
};
