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
            $table->foreignId('marca_id')->nullable()->constrained('marcas')->onUpdate('cascade')->onDelete('set null');            
            $table->String('cpu');
            $table->String('ram');
            $table->foreignId('sistema_id')->nullable()->constrained('sistemas')->onUpdate('cascade')->onDelete('set null');
            $table->String('macaddress');
            $table->String('ip');          
            $table->foreignId('funcionario_id')->nullable()->constrained('funcionarios')->onUpdate('cascade')->onDelete('set null');     
            $table->foreignId('telefono_id')->nullable()->constrained('telefonos')->onUpdate('cascade')->onDelete('set null');
            $table->foreignId('impresora_id')->nullable()->constrained('impresoras')->onUpdate('cascade')->onDelete('set null'); 
            $table->foreignId('monitor_id')->nullable()->constrained('monitors')->onUpdate('cascade')->onDelete('set null'); 
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
