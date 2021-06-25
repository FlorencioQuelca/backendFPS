<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresentadosProyectoEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentadosProyectoEmpresas', function (Blueprint $table) {
            $table->id();
            $table->integer('num')->default(0);
            $table->decimal('monto',10,2)->default(0);

          /**
           * 
          
            $table->unsignedBigInteger('empresa_id');
            $table->foreign('empresa_id')
                            ->references('id')
                            ->on('empresas')
                            ->onUpdate('cascade')
                            ->onDelete('cascade');
                            
            $table->unsignedBigInteger('proyectoEmpresa_id');
            $table->foreign('proyectoEmpresa_id')
                            ->references('id')
                            ->on('proyectoEmpresas')
                            ->onUpdate('cascade')
                            ->onDelete('cascade');


            $table->unsignedBigInteger('sociedadAccidental_id');
            $table->foreign('sociedadAccidental_id')
                            ->references('id')
                            ->on('sociedadAccidentals')
                            ->onUpdate('cascade')
                            ->onDelete('cascade');
                            
            //fiscal
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                            ->references('id')
                            ->on('users')
                            ->onUpdate('cascade')
                            ->onDelete('cascade'); 
                             */
            $table->timestamps();
        });
    }

    /**
     * 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presentadosProyectoEmpresas');
    }
}
