<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitFactureFournisseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit_facture_fournisseurs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('article_id')->constrained('articles')
                                                ->cascadeOnUpdate()
                                                ->nullOnDelete();
            $table->foreignId('facture_fournisseur_id')->constrained('facture_fournisseurs')
                                                            ->cascadeOnUpdate()
                                                            ->nullOnDelete();
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
        Schema::dropIfExists('produit_facture_fournisseurs');
    }
}
