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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->float('precio', 8, 2);
            $table->string('imagen');
            $table->string('imagen_public_id')->default("0");
            $table->string('talles');
            $table->unsignedBigInteger('categoria_id');
            $table->boolean('activo')->default(true);
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categorias')
                ->cascadeOnUpdate()
                ->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
