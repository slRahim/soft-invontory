<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFournisseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fournisseurs', function (Blueprint $table) {
            $table->id();
            $table->string('code_fournisseur',255)->unique();
            $table->string('nom',255);
            $table->integer('statut')->default(1);
            $table->string('adresse',255);
            $table->string('ville',255);
            $table->string('code_postale',255)->nullable();
            $table->string('telephone1',255)->nullable();
            $table->string('telephone2',255)->nullable();
            $table->string('mobile1',255);
            $table->string('mobile2',255)->nullable();
            $table->string('email',255)->nullable();
            $table->double('credit')->nullable();
            $table->double('dernier_verssement')->nullable();
            $table->double('chifre_affaire')->nullable();
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
        Schema::dropIfExists('fournisseurs');
    }
}
