<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('titulo')->nullable;
            $table->text('descricao')->default("Olá");
            $table->string('diretor')->default("Olá");
            $table->year('ano')->default("0000");
            $table->text('comentario')->default("Olá");
            $table->integer('nota');
            $table->text('url_foto')->default("Olá");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
