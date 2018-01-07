<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAgendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTimeTz('hora_inicial');	
            $table->dateTimeTz('hora_final');
            $table->string('sala', 20);
            $table->integer('dia_semana');
            
            $table->integer('medico_id')->unsigned();
            $table->foreign('medico_id')->references('id')
                    ->on('medicos')
                    ->onDelete('cascade');
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
        Schema::drop('agendas');
    }
}
