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
        Schema::create('prover_sucursal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idProveedor');
            $table->unsignedBigInteger('idSucursal');
            $table->foreign('idProveedor')->references('id')->on('provers')->onDelete('cascade');
            $table->foreign('idSucursal')->references('id')->on('sucurs')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prover_sucursal');
    }
};
