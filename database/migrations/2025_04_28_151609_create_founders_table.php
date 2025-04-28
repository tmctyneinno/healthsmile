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
        Schema::create('founders', function (Blueprint $table) {
            $table->id();
            $table->text('bio')->nullable();
            $table->text('qualification')->nullable();
            $table->text('bio_img')->nullable();
            $table->text('experience')->nullable();
            $table->text('experience_img')->nullable();
            $table->text('approach')->nullable();
            $table->text('approach_img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('founders');
    }
};
