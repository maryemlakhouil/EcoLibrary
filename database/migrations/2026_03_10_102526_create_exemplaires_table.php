<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('exemplaires', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('livre_id')->constrained('livres')->cascadeOnDelete();
            $table->string('code_inventaire')->unique();
            $table->enum('etat', ['disponible', 'emprunte', 'degrade', 'perdu'])->default('disponible');
            $table->date('date_acquisition')->nullable();
            $table->text('note_degradation')->nullable();
            $table->timestamp('date_degradation')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exemplaires');
    }
};
