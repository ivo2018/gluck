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
        Schema::create('sucurs', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',255);
            $table->string('direccion',255);
            $table->string('telefono',255);
            $table->string('email',255);
            $table->string('emailSCI',255);
            $table->unsignedBigInteger('idLocalidad');
            $table->foreign('idLocalidad')->references('id')->on('locals')->onDelete('cascade');
            $table->string('facebook',255);
            $table->string('instagram',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sucurs');
    }
};
