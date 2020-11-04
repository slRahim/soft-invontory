<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcompteEmpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acompte_emps', function (Blueprint $table) {
            $table->id();
            $table->string('code_acompte',255)->unique();
            $table->dateTime('date');
            $table->string('objet',255);
            $table->string('modalite',255)->nullable();
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
        Schema::dropIfExists('acompte_emps');
    }
}
