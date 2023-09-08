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
            $table->string('descripcion',255);
            $table->datetime(3);
            $table->string('codigoDeBarra',255);
            $table->string('urlImagen',255);
            $table->smallInteger('activo');
            $table->decimal('precioDeCosto',20,3);
            $table->decimal('precioDeVenta',20,3);
            $table->decimal('descuento',5,2);
            $table->decimal('recargo',5,2);
            $table->unsignedBigInteger('idCodigoIva');
            $table->foreign('idCodigoIva')->references('id')->on('codigoivas')->onDelete('cascade');
            $table->unsignedBigInteger('idRubro');
            $table->foreign('idRubro')->references('id')->on('rubros')->onDelete('cascade');
            $table->longText('imagen');
            $table->smallInteger('tiendagluck');
            $table->string('variantes',255);
            $table->longText('detalleTienda');
            $table->timestamps();
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
