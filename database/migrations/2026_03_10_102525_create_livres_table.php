<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * isbn:  l’identifiant bibliographique du livre 1234567890876
     */
    public function up(): void
    {
        Schema::create('livres', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('categorie_id')->constrained('categories')->cascadeOnDelete();
            $table->string('titre');
            $table->string('slug')->unique();
            $table->string('auteur');
            $table->string('isbn')->nullable()->unique();
            $table->text('description')->nullable();
            $table->date('date_publication')->nullable();
            $table->boolean('est_actif')->default(true);
            $table->unsignedInteger('nombre_vues')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livres');
    }
};
