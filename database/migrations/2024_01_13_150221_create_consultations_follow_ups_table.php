<?php

use App\Models\Consultation;
use App\Models\Doctor;
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
        Schema::create('consultations_follow_ups', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Patient::class)->constrained()->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignIdFor(Doctor::class)->constrained()->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignIdFor(Consultation::class)->constrained()->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('doctor_action');
            $table->string('rejection_reason');
            $table->longText('other_notes');
            $table->integer('user_rate');
            $table->longText('user_note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultations_follow_ups');
    }
};
