<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOrgao extends Migration
{
    public function up(): void
    {
        Schema::create('orgao', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->id()->nullable(false)->autoIncrement();
            $table->string('nome', 255)->nullable(false);
            $table->string('sigla', 12)->nullable(false);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orgao');
    }
}
