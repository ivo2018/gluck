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
        Schema::create('cabecerafacturacompras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idSucursal');
            $table->foreign('idSucursal')->references('id')->on('sucurs')->onDelete('cascade');
            $table->bigInteger('numeroComprobante');
            $table->string('letra',2);
            $table->unsignedBigInteger('idProveedor');
            $table->foreign('idProveedor')->references('id')->on('provers')->onDelete('cascade');
            $table->datetime('fecha',3);
            $table->decimal('descuento',20,3);
            $table->decimal('recargo',20,3);
            $table->decimal('netoGravado',20,3);
            $table->decimal('total',20,3);
            $table->string('cae',255);
            $table->unsignedBigInteger('idCaja');
            $table->foreign('idCaja')->references('id')->on('movimientosdecajas')->onDelete('cascade');
            $table->tinyInteger('pagada');
            $table->datetime('fechaPago',3);
            $table->decimal('iva',4,2);
            $table->decimal('otrosImpuestos',20,3);
            $table->longText('observaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cabecerafacturacompras');
    }
};
