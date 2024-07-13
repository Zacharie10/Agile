<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('taches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('projet_id')->constrained('projects')->onDelete('cascade');
            $table->string('intitule');
            $table->text('description')->nullable();
            $table->foreignId('responsable_id')->constrained('users')->onDelete('cascade');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('statut')->default('A faire');
            $table->string('type');
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
        Schema::dropIfExists('taches');
    }
};
