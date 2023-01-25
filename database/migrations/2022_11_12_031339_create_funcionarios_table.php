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
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->String('nombre');
            $table->String('ap_paterno');
            $table->String('ap_materno');
            $table->foreignId('rol_id')->nullable()->constrained('rols')->onUpdate('cascade')->onDelete('set null');
            $table->foreignId('unidad_id')->nullable()->constrained('unidads')->onUpdate('cascade')->onDelete('set null');            
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
        Schema::dropIfExists('funcionarios');
    }
};
