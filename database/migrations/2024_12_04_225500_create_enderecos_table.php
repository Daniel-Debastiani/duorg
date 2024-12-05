<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->string('rua');
            $table->string('numero');
            $table->string('cidade');
            $table->string('estado');
            $table->string('cep');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
}