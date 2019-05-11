<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreArticulo');
            $table->longText('descripcion')->nullable();
            $table->string('identificador')->nullable();
            $table->float('precio_compra',8,2);
            $table->float('precio_venta',8,2);
            $table->enum('genero',['Hombre','Mujer']);
            $table->enum('disponibilidad',['Disponible','Apartado']);
            $table->enum('eliminar',['activo','inactivo']);       
            $table->string('categoria');
            $table->string('foto');
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
        Schema::dropIfExists('articulos');
    }
}
