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
            $table->foreignId('marca_id')->constrained('marcas')->onUpdate('cascade')->nullOnDelete();           
            $table->String('modelo')->nullable();
            $table->enum('tipo',['ANÁLOGO', 'IP']);
            $table->String('macaddress')->nullable();
            $table->String('ip')->nullable();
            $table->String('serie');
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
