<?php

use App\Models\Doctor;
use App\Models\MedicalSpeciality;
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
        Schema::create('doctor_medical_speciality', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Doctor::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(MedicalSpeciality::class)->constrained()->cascadeOnDelete();
            $table->float('price')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_medical_speciality');
    }
};
