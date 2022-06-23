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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('Cedula')->unique();
            $table->string('Nombre');
            $table->string('Telefono');
            $table->string('slug');
            $table->unsignedBigInteger('Contrato_id');
            $table->foreign('Contrato_id')->references('id')->on('contratos')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('Area_id')->nullable();
            $table->foreign('Area_id')->references('id')->on('areas')->onDelete('set null')->onUpdate('cascade');

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
        Schema::dropIfExists('empleados');
    }
};
