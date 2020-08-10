<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Noticia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Crear la entidad/tabla “Noticia”
        Schema::create('noticia', function(BluePrint $table)
        {
            $table->id();
            $table->string('title');
            $table->string('summary');
            $table->string('content');
            $table->string('url_normalized');
            $table->timestamps();
        }
        );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
