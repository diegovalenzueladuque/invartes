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
            $table->String('codigo');  
            $table->String('serie');         
            $table->foreignId('marca_id')->constrained('marcas')->onUpdate('cascade')->nullOnDelete();            
            $table->foreignId('detalle_id')->constrained('detalles')->onUpdate('cascade')->nullOnDelete();            
            $table->foreignId('funcionario_id')->constrained('funcionarios')->onUpdate('cascade')->nullOnDelete();     
            $table->foreignId('telefono_id')->constrained('telefonos')->onUpdate('cascade')->nullOnDelete(); 
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
