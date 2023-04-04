<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('prod-cat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_categoria');
            $table->unsignedBigInteger('id_producto');
            $table->timestamps();

            $table->foreign('id_categoria')->references('id')->on('categoria')->onUpdate('cascade');
            $table->foreign('id_producto')->references('id')->on('productos')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prod-cat');
    }
};
