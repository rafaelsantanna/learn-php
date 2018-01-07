<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableConsultas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->increments('id');

             $table->string('prontuario', 100);
            $table->dateTimeTz('data_hora');
            
            $table->integer('especialidade_medico_id')->unsigned();
            $table->foreign('especialidade_medico_id')->references('id')
                    ->on('especialidade_medicos');
            
            $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')->references('id')
                    ->on('pacientes');

            $table->integer('status_id')->unsigned();
            $table->foreign('status_id')->references('id')
                    ->on('status'); 

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
        Schema::drop('consultas');
    }
}
