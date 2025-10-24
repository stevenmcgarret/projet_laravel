<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reparers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('atelier_id')->constrained('vehicules')->onUpdate('cascade')->onDelete('cascade');
        $table->foreignId('Reparateur_id')->nullable()->constrained('techniciens')->onUpdate('cascade')->onDelete('set null');
        $table->date('date');
        $table->integer('duree_main_oeuvre')->nullable(); // en minutes, nullable
        $table->text('objet_reparation');
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
        Schema::dropIfExists('reparers');
    }
};
