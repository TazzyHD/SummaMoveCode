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
        Schema::create('oefeningen', function (Blueprint $table) {
            $table->id();
            $table->string('titel');
            $table->string('instructie', 1000);
            $table->string('engelse_instructie', 1000);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oefeningen');
    }
};