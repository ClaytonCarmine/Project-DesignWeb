<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListaComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_compras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('comida_id')->nullable();
            $table->unsignedBigInteger('ticket_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->integer('cantidad');

            $table->foreign('user_id')
                ->references('id')->on('lista_compras')
                ->onDelete('set null');
            $table->foreign('ticket_id')
                    ->references('id')->on('tickets')
                    ->onDelete('set null');
            $table->foreign('comida_id')
                    ->references('id')->on('comidas')
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
        Schema::dropIfExists('lista_compras');
    }
}
