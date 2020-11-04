<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerssementFournisseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verssement_fournisseurs', function (Blueprint $table) {
            $table->id();
            $table->string('code_verssement',255)->unique();
            $table->dateTime('date');
            $table->string('modalite',255)->nullable();
            $table->string('objet',255);
            $table->double('montant');
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
        Schema::dropIfExists('verssement_fournisseurs');
    }
}
