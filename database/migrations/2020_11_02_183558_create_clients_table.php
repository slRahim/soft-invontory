<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('code_client',255)->unique();
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
            $table->double('credit')->nullable()->default(0);
            $table->double('dernier_verssement')->nullable();
            $table->double('chifre_affaire')->nullable()->default(0);
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
        Schema::dropIfExists('clients');
    }
}
