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
        Schema::create('detallefacturascompras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idCabeceraFacturaCompra');
            $table->foreign('idCabeceraFacturaCompra')->references('id')->on('cabecerafacturacompras')->onDelete('cascade');
            $table->unsignedBigInteger('idProducto');
            $table->foreign('idProducto')->references('id')->on('productos')->onDelete('cascade');
            $table->string('descripcion',255);
            $table->decimal('cantidad',20,3);
            $table->decimal('precioDeCosto',20,3);
            $table->decimal('descuento',20,3);
            $table->decimal('recargo',20,3);
            $table->decimal('porcentajeIva',20,3);
            $table->decimal('iva',20,3);
            $table->decimal('total',20,3);
            $table->unsignedBigInteger('idUnidadDeMedida');
            $table->foreign('idUnidadDeMedida')->references('id')->on('unidadesdemedidas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detallefacturascompras');
    }
};
