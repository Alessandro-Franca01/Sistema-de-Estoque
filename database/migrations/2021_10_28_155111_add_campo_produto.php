<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCampoProduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produtos', function(Blueprint $table){
            $table->string('tamanho', '10');
        });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropColumn('tamanho');
        });
    }
}
