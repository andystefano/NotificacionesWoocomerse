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
    
        Schema::create('woocomerse_notificacion', function (Blueprint $table) {
            $table->id();
            $table->text('nombre')->nullable();
            $table->string('contenido', 5000)->nullable();
            $table->dateTime('fecha')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();
        });





    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('woocomerse_notificacion');
    }
};
