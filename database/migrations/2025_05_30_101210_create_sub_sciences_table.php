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
        Schema::create('sub_sciences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('science_id')->constrained('sciences')->onDelete('cascade');
            $table->string('cipher')->comment('Ixtisoslik shifri');
            $table->string('name')->comment('Ixtisoslik nomi');
            $table->string('network_of_science')->comment('Ilm-fan tarmog\'i');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_sciences');
    }
};
