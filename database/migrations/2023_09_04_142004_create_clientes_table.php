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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',255);
            $table->string('domicilio',255);
            $table->string('telefono',255);
            $table->string('email',255);
            $table->string('cuit',255);
            $table->unsignedBigInteger('idCodigoIva')->nullable();
            $table->foreign('idCodigoIva')->references('id')->on('codigoivas')->onDelete('set null');
            $table->string('observacion',255);
            $table->decimal('descuento',5,2);
            $table->decimal('recargo',5,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
