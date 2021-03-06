<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactureClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facture_clients', function (Blueprint $table) {
            $table->id();
            $table->string('code_facture',255)->unique();
            $table->dateTime('date');
            $table->double('total_ttc');
            $table->integer('payer');
            $table->double('verssement')->nullable();
            $table->double('reste');
            $table->string('type_facture',255);
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
        Schema::dropIfExists('facture_clients');
    }
}
