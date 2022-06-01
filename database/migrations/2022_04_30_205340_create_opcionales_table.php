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
        Schema::create('opcionales', function (Blueprint $table) {
            $table->id();
            $table->integer('plato_id')->unsigned()->index();
            $table->foreign('plato_id')->references('id')->on('platos')->onDelete('cascade');
            $table->string('nombre');
            $table->text('descripcion');
            $table->integer('precio');
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
        Schema::dropIfExists('opcionales');
    }
};
