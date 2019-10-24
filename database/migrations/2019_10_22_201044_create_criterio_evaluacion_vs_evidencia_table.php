<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCriterioEvaluacionVsEvidenciaTable extends Migration{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('criterio_evaluacion_vs_evidencia', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger("criterio_evaluacion_id")->unsigned();
            $table->bigInteger("evidencia_id")->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('criterio_evaluacion_vs_evidencia');
    }
}
