<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('comida_id')->nullable();
            $table->unsignedBigInteger('bebida_id')->nullable();
            $table->string('descripcion');
            $table->double('total');

            $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('set null'); 
            $table->foreign('comida_id')
                    ->references('id')->on('comidas')
                    ->onDelete('set null');
            $table->foreign('bebida_id')
                    ->references('id')->on('bebidas')
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
        Schema::dropIfExists('tickets');
    }
}
