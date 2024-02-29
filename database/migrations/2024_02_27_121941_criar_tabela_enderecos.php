<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table){
            $table->id();
            $table->sting( column: 'cep');
            $table->sting( column: 'logradouro');
            $table->sting( column: 'numero');
            $table->sting( column: 'bairro');
            $table->sting( column: 'cidade');
            $table->sting( column: 'estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists( table: 'enderecos');
    }
};
