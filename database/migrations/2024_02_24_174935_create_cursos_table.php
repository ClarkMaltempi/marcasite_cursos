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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_curso', 50);
            $table->text('descricao');
            $table->decimal('valor', 10, 2);
            $table->date('dtinicio_inscricoes');
            $table->date('dttermino_inscricoes');
            $table->integer('qtd_inscritos');
            $table->string('nome_arquivo')->nullable();
            $table->string('path_arquivo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
