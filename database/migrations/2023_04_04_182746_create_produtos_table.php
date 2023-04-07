<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //nome ok
        //valor ok
        //estoque ok
        // criar tabela de produtos
        Schema::create('produtos', function (Blueprint $table) {
            $table->id('id');
            $table->string('nome');
            $table->decimal('valor');
            $table->integer('estoque');
            $table->decimal('avaliacao');
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
        Schema::dropIfExists('produtos');
    }
};
