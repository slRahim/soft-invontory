<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcheancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('echeances', function (Blueprint $table) {
            $table->id();
            $table->string('code_echeance',255)->unique();
            $table->double('montant');
            $table->integer('nombre_jour');
            $table->date('date');
            $table->string('observation',255)->nullable();
            $table->integer('etat')->default(1);
            $table->foreignId('client_id')->nullable()
                                                ->constrained('clients')
                                                ->nullOnDelete()
                                                ->cascadeOnUpdate();
            $table->foreignId('fournisseur_id')->nullable()
                                                ->constrained('fournisseurs')
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
        Schema::dropIfExists('echeances');
    }
}
