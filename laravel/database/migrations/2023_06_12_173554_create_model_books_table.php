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
        Schema::create('book', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('title');
            $table->integer('pages');
            $table->double('price', 10, 2);

            // Cria 2 Colunas quando foi criada e ultima alteração
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book');
    }
};