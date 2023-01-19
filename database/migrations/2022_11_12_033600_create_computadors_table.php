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
        Schema::create('computadors', function (Blueprint $table) {
            $table->id();
            $table->String('codigo')->unique();  
            $table->String('serie')->unique();         
            $table->foreignId('marca_id')->constrained('marcas')->onUpdate('cascade')->onDelete('cascade');            
            $table->String('cpu');
            $table->String('ram');
            $table->foreignId('sistema_id')->constrained('sistemas')->onUpdate('cascade')->onDelete('cascade');
            $table->String('macaddress')->unique();
            $table->String('ip');          
            $table->foreignId('funcionario_id')->constrained('funcionarios')->onUpdate('cascade')->onDelete('cascade');     
            $table->foreignId('telefono_id')->constrained('telefonos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('impresora_id')->constrained('impresoras')->onUpdate('cascade')->onDelete('cascade'); 
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
        Schema::dropIfExists('computadors');
    }
};
