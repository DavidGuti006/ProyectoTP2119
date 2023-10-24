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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('ubication');
            $table->dateTime('fech_inicio');
            $table->dateTime('fech_final');
            $table->timestamps();
            $table->unsignedBigInteger('agends_id');
            $table->unsignedBigInteger('statuses_id');
            $table->unsignedBigInteger('priorities_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
