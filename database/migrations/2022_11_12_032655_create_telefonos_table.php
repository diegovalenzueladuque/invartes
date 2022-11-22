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
        Schema::create('telefonos', function (Blueprint $table) {
            $table->id();
            $table->String('anexo');                        
            $table->foreignId('marca_id')->constrained('marcas')->onUpdate('cascade')->onDelete('cascade');           
            $table->String('modelo');
            $table->enum('tipo',['ANÁLOGO', 'IP']);
            $table->String('macaddress');
            $table->String('ip');
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
        Schema::dropIfExists('telefonos');
    }
};
