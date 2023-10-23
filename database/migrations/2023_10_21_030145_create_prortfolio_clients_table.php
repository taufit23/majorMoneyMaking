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
        Schema::create('prortfolio_clients', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('portofolio_id');
            $table->string('name');
            $table->string('type');
            $table->longText('testimony');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prortfolio_clients');
    }
};
