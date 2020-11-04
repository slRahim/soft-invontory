<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitFactureClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit_facture_clients', function (Blueprint $table) {
            $table->id();
            $table->integer('qte_vendus');
            $table->double('colis');
            $table->double('prix_unite_vendus');
            $table->double('montant_vendus');
            $table->double('marge_vendus');
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
        Schema::dropIfExists('produit_facture_clients');
    }
}
