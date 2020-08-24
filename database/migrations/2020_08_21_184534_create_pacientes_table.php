<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id('Id');
            $table->string('Nome');
            $table->double('Cpf');
            $table->double('Rg');
            $table->string('CartaoSus');
            $table->string('Sexo');
            $table->dateTime('Nascimento');
            $table->string('NomeDaMae');
            $table->double('Telefone');
            $table->double('Cep');
            $table->string('AvenidaRua');
            $table->double('Numero');
            $table->double('Quadra');
            $table->double('Lote');
            $table->string('Complemento');
            $table->string('Bairro');
            $table->string('Cidade');
            $table->string('UF');
            $table->string('Foto')->nullable();
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
        Schema::dropIfExists('pacientes');
    }
}
