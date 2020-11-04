<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('code_emp',255)->unique();
            $table->string('nom',255);
            $table->string('adresee',255);
            $table->string('ville');
            $table->string('mobile1',255);
            $table->string('mobile2',255)->nullable();
            $table->string('email',255)->nullable();
            $table->double('salaire');
            $table->double('dernier_acompte')->nullable();
            $table->double('solde')->nullable();
            $table->date('date_paiement');
            $table->integer('nombre_absence')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
