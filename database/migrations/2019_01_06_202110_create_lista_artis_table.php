<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListaArtisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_artis', function (Blueprint $table) {
               $table->increments('id');
            $table->unsignedInteger('articulo_id');
            $table->foreign('articulo_id')->references('id')->on('articulos');
            $table->float('precio_venta', 8, 2);
            $table->unsignedInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->date('fecha_entrega');
            $table->time('hora_entrega');
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
        Schema::dropIfExists('lista_artis');
    }
}
