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
        Schema::create('cars', function (Blueprint $table) {
            /* La tabla creada debe tener como mínimo 8 columnas.
            De las columnas creadas, usar al menos 3 tipos de datos. */
            $table->id();
            $table->string('name')->default('no name')->unique();
            $table->string('also_called');
            $table->string('manufacturer');
            $table->string('color');
            $table->string('engine');
            $table->date('release_date');
            $table->text('description')->nullable();
            $table->float('price', 8, 2)->default(0.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
