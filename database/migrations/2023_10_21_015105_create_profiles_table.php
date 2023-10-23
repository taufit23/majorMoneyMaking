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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->date('tanggal_lahir');
            $table->text('alamat_ktp');
            $table->text('alamat_domisili');
            $table->string('agama');
            $table->string('jenis_kelamin');
            $table->string('avatar');
            $table->longText('about_text');
            $table->longText('summary_text');
            $table->string('cv_file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
