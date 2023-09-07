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
        Schema::create('productosdecompras', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion',255);
            $table->string('codigoDeBarra',255);
            $table->string('urlImagen',255);
            $table->smallInteger('activo');
            $table->decimal('precioDeCosto',20,3);
            $table->decimal('descuento',5,2);
            $table->decimal('recargo',5,2);
            $table->unsignedBigInteger('idCodigoIva');
            $table->foreign('idCodigoIva')->references('id')->on('codigoivas')->onDelete('cascade');
            $table->unsignedBigInteger('idProveedor');
            $table->foreign('idProveedor')->references('id')->on('provers')->onDelete('cascade');
            $table->longText('imagen');
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
        Schema::dropIfExists('productosdecompras');
    }
};
