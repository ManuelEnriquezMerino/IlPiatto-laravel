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
        Schema::create('opcional_pedido_plato', function (Blueprint $table) {
            $table->id();
            $table->integer('opcional_id')->unsigned()->index()->nullable();
            $table->foreign('opcional_id')->references('id')->on('opcionales')->onDelete('cascade');
            $table->integer('pedido_id')->unsigned()->index();
            $table->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('cascade');
            $table->integer('plato_id')->unsigned()->index();
            $table->foreign('plato_id')->references('id')->on('platos')->onDelete('cascade');
            $table->integer('n_orden')->unsigned()->index();
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
        Schema::dropIfExists('opcional_pedido_plato');
    }
};
