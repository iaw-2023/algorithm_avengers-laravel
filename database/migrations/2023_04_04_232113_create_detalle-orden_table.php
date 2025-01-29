<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Producto;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detalle_orden', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('compra_id');
            $table->unsignedBigInteger('producto_id');
            $table->unsignedTinyInteger('cantidad');
            $table->enum('talle', Producto::getTallesValidos());
            $table->timestamps();

            $table->foreign('compra_id')->references('id')->on('compras')
                ->cascadeOnUpdate()
                ->restrictOnDelete();
            $table->foreign('producto_id')->references('id')->on('productos')
                ->cascadeOnUpdate()
                ->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_orden');
    }
};
