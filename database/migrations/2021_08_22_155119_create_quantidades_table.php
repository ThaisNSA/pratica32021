<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuantidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quantidades', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 100);
            $table->integer('unidade')->nullable();
            $table->integer('buque')->nullable();
            $table->integer('semente')->nullable();


            $table->foreignId('flor_id')->constrained('flores')->onDelete('cascade');
            $table->foreignId('tipo_id')->constrained()->onDelete('cascade');
            $table->foreignId('finalidade_id')->constrained()->onDelete('cascade');

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
        Schema::dropIfExists('quantidades');
    }
}
