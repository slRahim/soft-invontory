<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('code_article',255)->unique();
            $table->string('code_bare',255)->unique();
            $table->string('referance',255)->unique();
            $table->string('designation',255);
            $table->double('colis');
            $table->integer('qte_disponible');
            $table->integer('qte_minimale')->default(0);
            $table->double('prix_achat');
            $table->double('prix_vente1');
            $table->double('prix_vente2')->nullable();
            $table->double('prix_vente_min');
            $table->double('marge1');
            $table->double('pourcentage_marge1');
            $table->double('marge2')->nullable();
            $table->double('pourcentage_marge2')->nullable();
            $table->double('marge_min');
            $table->double('pourcentage_marge_min');
            $table->foreignId('stock_id')->constrained('stocks')
                                                ->nullOnDelete()
                                                ->cascadeOnUpdate();
            $table->foreignId('famille_id')->constrained('familles')
                                                ->nullOnDelete()
                                                ->cascadeOnUpdate();
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
        Schema::dropIfExists('articles');
    }
}
