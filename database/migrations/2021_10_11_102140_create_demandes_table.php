<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->id("idDemande");
            $table->string("nomDemandeur");
            $table->string("prenomDemandeur");
            $table->string("tel");
            $table->string("service");
            $table->string("profession");
            $table->string("motif");
            $table->boolean("decision")->nullable();
            $table->date("date_demande");
            $table->date("date_reponse")->nullable();
            $table->date("date_audience")->nullable();
            $table->time("heure_audience")->nullable();
            $table->bigInteger("id_demandeur");

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
        Schema::dropIfExists('demandes');
    }
}
