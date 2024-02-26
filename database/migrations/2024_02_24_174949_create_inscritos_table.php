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
        Schema::create('inscritos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 30); // Adicionado: Nome do aluno
            $table->string('email', 80)->unique(); // Adicionado: E-mail
            $table->string('cpf', 14)->unique(); // Adicionado: CPF
            $table->string('endereco')->nullable(); // Adicionado: Endereço
            $table->string('empresa')->nullable(); // Adicionado: Empresa
            $table->string('telefone', 20)->nullable(); // Adicionado: Telefone
            $table->string('funcao')->nullable(); // Adicionado: Função
            $table->string('curso')->nullable(); // Adicionado: Curso
            $table->string('senha'); // Adicionado: Senha
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscritos');
    }
};
