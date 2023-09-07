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
        Schema::create('detalleivaventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idCabeceraFacturaVenta');
            $table->unsignedBigInteger('idSucursal');
            $table->foreign('idCabeceraFacturaVenta')->references('id')->on('cabecerafacturaventas')->onDelete('cascade');
            $table->foreign('idSucursal')->references('id')->on('sucurs')->onDelete('cascade');
            $table->decimal('porcentajeIva',5,2);
            $table->decimal('importeIva',20,3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalleivaventas');
    }
};
