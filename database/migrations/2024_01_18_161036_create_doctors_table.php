<?php

use App\Constants\DoctorRequestStatusConstants;
use App\Models\AcademicDegree;
use App\Models\MedicalSpeciality;
use App\Models\User;
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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(AcademicDegree::class)->nullable()->constrained()->nullOnDelete();
            $table->boolean('urgent_consultation_enabled')->default(false);
            $table->boolean('with_appointment_consultation_enabled')->default(false);
            $table->string('national_id')->nullable();
            $table->string('medical_id')->nullable();
            $table->string('university')->nullable();
            $table->text('bio')->nullable();
            $table->float('experience_years')->nullable();
            $table->tinyInteger('request_status')->default(DoctorRequestStatusConstants::PENDING->value);
            $table->boolean('is_active')->default(true);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
