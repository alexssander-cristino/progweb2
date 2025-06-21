<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantesTable extends Migration
{
    public function up()
{
    Schema::create('participantes', function (Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->string('email')->unique();
        $table->string('telefone');
        $table->foreignId('evento_id')->constrained()->onDelete('cascade');
        $table->timestamps();
    });
}
    public function down()
    {
        Schema::dropIfExists('participantes');
    }
}
