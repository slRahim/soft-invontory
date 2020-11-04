<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTresoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tresores', function (Blueprint $table) {
            $table->id();
            $table->string('code_caisse',255)->unique();
            $table->double('solde_init');
            $table->double('solde')->nullable();
            $table->double('montant_sortie')->nullable();
            $table->double('montant_entre')->nullable();
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
        Schema::dropIfExists('tresores');
    }
}
