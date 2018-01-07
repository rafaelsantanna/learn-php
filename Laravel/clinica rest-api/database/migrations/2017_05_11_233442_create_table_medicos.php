<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMedicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('crm', 15);
            $table->string('sexo', 1);
            $table->string('telefone', 20);
            $table->boolean('ativo', 1);
            
            // $table->integer('user_id')->unsigned();
            // $table->foreign('user_id')->references('id')
            //       ->on('users')
            //       ->onDelete('cascade');
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
        Schema::drop('medicos');
    }
}
