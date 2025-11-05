<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * Crea las tablas para la división territorial de España
     * basado en datos del INE (Instituto Nacional de Estadística)
     *
     * @return void
     */
    public function up(): void
    {
        // Tabla de Comunidades Autónomas
        Schema::create('comunidades', function (Blueprint $table) {
            $table->tinyInteger('id_comunidad')->primary();
            $table->string('nombre', 100);
            $table->timestamps();

            $table->unique('id_comunidad');
        });

        // Tabla de Provincias
        Schema::create('provincias', function (Blueprint $table) {
            $table->integer('provincia_id')->primary();
            $table->tinyInteger('comunidad_id')->nullable();
            $table->string('nom_provincia', 45)->nullable();
            $table->timestamps();

            $table->index('comunidad_id');

            // Clave foránea
            $table->foreign('comunidad_id')
                  ->references('id_comunidad')
                  ->on('comunidades')
                  ->onDelete('no action')
                  ->onUpdate('no action');
        });

        // Tabla de Municipios
        Schema::create('municipios', function (Blueprint $table) {
            $table->id('id_municipio');
            $table->integer('provincia_id');
            $table->integer('cod_municipio');
            $table->integer('DC');
            $table->string('nom_municipi', 45)->nullable();
            $table->timestamps();

            $table->index('provincia_id', 'fk_municipis_provincies1');

            // Clave foránea
            $table->foreign('provincia_id')
                  ->references('provincia_id')
                  ->on('provincias')
                  ->onDelete('no action')
                  ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('municipios');
        Schema::dropIfExists('provincias');
        Schema::dropIfExists('comunidades');
    }
};
