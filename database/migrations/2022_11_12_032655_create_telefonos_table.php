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
            $table->foreignId('marca_id')->nullable()->constrained('marcas')->onUpdate('cascade')->onDelete('set null');           
            $table->String('modelo')->nullable();
            $table->enum('tipo',['ANÁLOGO', 'IP']);
            $table->String('macaddress')->nullable()->unique();
            $table->String('ip')->nullable();
            $table->String('serie')->unique();
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
