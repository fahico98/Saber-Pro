<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultadoTable extends Migration{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('resultado', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('asignatura_id')->unsigned();
            //$table->foreign('asignatura_id')->references('id')->on('asignatura');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::table('resultado', function (Blueprint $table){
            $table->dropForeign(['asignatura_id']);
        });
        Schema::dropIfExists('resultado');
    }
}
