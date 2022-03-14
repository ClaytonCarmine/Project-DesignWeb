<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBebidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bebidas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('precio');
            $table->integer('stock');
            $table->string('tamaño');
            $table->string('imagen');
            $table->unsignedBigInteger('marca_id')->nullable();
            $table->foreign('marca_id')
                    ->references('id')->on('marcas')
                    ->onDelete('set null'); 

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
        Schema::dropIfExists('bebidas');
    }
}
