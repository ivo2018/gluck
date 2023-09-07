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
        Schema::create('mails', function (Blueprint $table) {
            $table->id();
            $table->string('userName');
            $table->unsignedBigInteger('idProvider');
            $table->foreign('idProvider')->references('id')->on('providers')->onDelete('cascade');
            $table->string('password',255);
            $table->string('filePath',255);
            $table->string('databaseName',255);
            $table->bigInteger('sucursal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mails');
    }
};
