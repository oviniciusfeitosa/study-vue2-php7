<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGrupoAssunto extends Migration
{
    public function up(): void
    {
        Schema::create('grupo_assunto', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id()->nullable(false)->primary()->autoIncrement();
            $table->unsignedBigInteger('assunto_pai_id');
            $table->unsignedBigInteger('assunto_filho_id')->unique();
            $table->foreign('assunto_pai_id')->references('id')->on('assunto');
            $table->foreign('assunto_filho_id')->references('id')->on('assunto');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('grupo_assunto');
    }
}
