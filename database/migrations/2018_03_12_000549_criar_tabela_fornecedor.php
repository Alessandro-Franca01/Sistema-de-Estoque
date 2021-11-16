<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaFornecedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->increments('id_fornecedor');
            $table->string('nome_loja');
            $table->string('celular');
            $table->string('email');
            $table->text('endereco');
            $table->text('ponto_referencia');
            $table->text('observacao');
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
        Schema::dropIfExists('fornecedores');
    }
}
