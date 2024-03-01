<?php

use App\Constants\ConsultationStatusConstants;
use App\Models\Coupon;
use App\Models\Doctor;
use App\Models\DoctorScheduleDayShift;
use App\Models\MedicalSpeciality;
use App\Models\Patient;
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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Doctor::class)->nullable()->constrained();
            $table->foreignIdFor(Patient::class)->constrained();
            $table->tinyInteger('status')->default(ConsultationStatusConstants::PENDING->value);
            $table->foreignIdFor(MedicalSpeciality::class)->nullable()->constrained();
            $table->text('patient_description')->nullable();
            $table->text('doctor_description')->nullable();
            $table->text('medical_review')->nullable();
            $table->json('prescription')->nullable();
            $table->text('other_diseases')->nullable();
            $table->text('latest_surgeries')->nullable();
            $table->tinyInteger('type');
            $table->tinyInteger('contact_type')->nullable();
            $table->foreignIdFor(DoctorScheduleDayShift::class)->nullable()->constrained();
            $table->dateTime('reminder_at')->nullable();
            $table->text('transfer_reason')->nullable();
            $table->text('transfer_notes')->nullable();
            $table->tinyInteger('transfer_case_rate')->nullable();
            $table->tinyInteger('payment_type')->nullable();
            $table->decimal('amount', 10)->nullable();
            $table->foreignIdFor(Coupon::class)->nullable()->constrained();
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
        Schema::dropIfExists('consultations');
    }
};
