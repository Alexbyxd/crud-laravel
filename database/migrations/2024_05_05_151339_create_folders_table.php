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
        Schema::create('folders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            //es para subcarpeta que referencia el id de una carpeta padre por eso puede ser nulo (nullable)
            //unsignedBigInteger es para almacenar numeros grandes sin numeros negativos
            $table->unsignedBigInteger('main_folder_id')->nullable();
            $table->foreign('main_folder_id')
                  ->references('id')
                  ->on('folders')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('folders');
    }
};
