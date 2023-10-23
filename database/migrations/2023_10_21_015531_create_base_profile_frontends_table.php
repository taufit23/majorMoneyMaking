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
        Schema::create('base_profile_frontends', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('profile_id');
            $table->bigInteger('theme_id');
            $table->bigInteger('setting_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('base_profile_frontends');
    }
};
