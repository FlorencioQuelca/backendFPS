<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectoPersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectoPersonas', function (Blueprint $table) {
            $table->id();
            $table->string('codigos');
            $table->string('nombre');
            $table->date('fecha');
            $table->time('hora');
            $table->decimal('precio',20,2)->default(0);
            $table->integer('proyectos')->default(1);
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
        Schema::dropIfExists('proyectoPersonas');
    }
}
