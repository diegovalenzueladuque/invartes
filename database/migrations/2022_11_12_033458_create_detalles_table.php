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
        Schema::create('detalles', function (Blueprint $table) {
            $table->id();
            $table->String('cpu');
            $table->String('ram');           
            $table->foreignId('sistema_id')->constrained('sistemas')->onUpdate('cascade')->nullOnDelete();            
            $table->String('macaddress');
            $table->String('ip');            
            $table->foreignId('impresora_id')->constrained('impresoras')->onUpdate('cascade')->nullOnDelete();
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
        Schema::dropIfExists('detalles');
    }
};
