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
        Schema::create('vinculo_escolas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('escola_id');
            $table->unsignedBigInteger('serie_id');
            $table->unsignedBigInteger('turma_id');
            $table->unsignedBigInteger('localidade_id');
            $table->unsignedBigInteger('turno_id');

            $table->foreign('escola_id')->references('id')->on('escolas')->onDelete('cascade');
            $table->foreign('serie_id')->references('id')->on('series')->onDelete('cascade');
            $table->foreign('turma_id')->references('id')->on('turmas')->onDelete('cascade');
            $table->foreign('localidade_id')->references('id')->on('localidades')->onDelete('cascade');
            $table->foreign('turno_id')->references('id')->on('turnos')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vinculo_escolas');
    }
};
