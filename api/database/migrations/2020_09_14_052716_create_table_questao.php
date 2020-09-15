<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableQuestao extends Migration
{
    public function up(): void
    {
        Schema::create('questao', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->id()->nullable(false)->autoIncrement();
            $table->string('descricao', 5000)->nullable(false);
            $table->unsignedBigInteger('orgao_id');
            $table->unsignedBigInteger('banca_id');
            $table->unsignedBigInteger('assunto_id');

            $table->foreign('orgao_id')->references('id')->on('orgao');
            $table->foreign('banca_id')->references('id')->on('banca');
            $table->foreign('assunto_id')->references('id')->on('assunto');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('questao');
    }
}
