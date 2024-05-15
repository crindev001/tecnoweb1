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
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->unsignedBigInteger('id_docente');
            $table->unsignedBigInteger('id_gestion');
            $table->timestamps();

            $table->foreign('id_docente')
                ->references('id')
                ->on('docentes')
                ->onDelete('CASCADE');
            $table->foreign('id_gestion')
                ->references('id')
                ->on('gestions')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materias');
    }
};
