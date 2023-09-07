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
        Schema::create('publis', function (Blueprint $table) {
            $table->id();
            $table->string('titulo',255);
            $table->string('copete',255);
            $table->dateTime('fechainicio',3);
            $table->dateTime('fechafin',3);
            $table->string('urlImagen',510);
            $table->string('link',510);
            $table->smallInteger('visibleMobile');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publis');
    }
};
