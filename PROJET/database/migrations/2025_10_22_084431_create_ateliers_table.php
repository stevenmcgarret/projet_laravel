<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\NullableType;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ateliers', function (Blueprint $table) {
            $table->id();
            $table->string('immatriculation');
            $table->string('marque');
            $table->string('modele');
            $table->string('couleur');
            $table->smallInteger('annee');
            $table->integer('kilometrage');
            $table->string('carrosserie');
            $table->string('energie');
            $table->string('boite');
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
        Schema::dropIfExists('ateliers');
    }
};
