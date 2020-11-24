<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('cnpj');
            $table->string('razaoSocial');
            $table->string('nomeFantasia');
            $table->string('cep');
            $table->string('logradouro');
            $table->integer('numero');
            $table->string('telefone');
            $table->string('email');
            $table->string('complemento')->nullable();
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->string('segmento');
            $table->bigInteger('inscricaoMunicipal');
            $table->bigInteger('inscricaoEstadual');
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
        Schema::dropIfExists('companies');
    }
}
