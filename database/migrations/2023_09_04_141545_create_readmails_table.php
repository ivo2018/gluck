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
        Schema::create('readmails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idEmail');
            $table->unsignedBigInteger('idSucursal');
            $table->foreign('idEmail')->references('id')->on('mailconfigurations')->onDelete('cascade');
            $table->foreign('idSucursal')->references('id')->on('sucurs')->onDelete('cascade');
            $table->string('subject',255);
            $table->string('date',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('readmails');
    }
};
