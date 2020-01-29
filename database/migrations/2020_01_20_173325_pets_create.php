<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class PetsCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->bigIncrements('id'); //big increments: chave primária
            $table->string('name');
            //$table->integer('owner_id'); se insere através de alter table
            $table->string('RGA');
            $table->date('data_nascimento');
            
            $table->timestamps();  //registro de tempo do Laravel
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pets');   //setando este codigo no down, consigo utilizar o php artisan migrate:rollback --step=1 para desfazer 1 migration por vez.
    }
}
