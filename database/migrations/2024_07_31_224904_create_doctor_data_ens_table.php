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
        Schema::create('doctor_data_ens', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('password');
            $table->string('department');
            $table->enum('job', ['clinic', 'home_visit', 'online_consultant'])->nullable();
            $table->string('location');
            $table->string('city');
            $table->string('scientific_certificate_image');
            $table->string('syndicate_image');
            $table->string('clinic_photos');
            $table->string('logo');
            $table->string('doctor_image');
            $table->string('professional_license');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_data_ens');
    }
};
