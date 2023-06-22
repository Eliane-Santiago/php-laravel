<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id();
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
        //Schema::dropIfExists('fornecedores'); //FAZ UM TESTE SE JÁ EXISTE UMA TALEBA COM ESSE NOME ELA SERÁ EXCLUÍDA
        Schema::drop('fornecedores'); //EXCLUI A TEBELA SEM REALIZAR TESTES

        //Schema::table('fornecedores', function (Blueprint $table) {
			//REMOVENDO COLUNAS
            //$table->dropColumn('uf'); //COLUNA INDIVIDUAL
			//$table->dropColumn('email'); //COLUNA INDIVIDUAL
			//$table->dropColumn(['uf', 'email']); //ARRAY DE COLUNA
        //});
    }
}
