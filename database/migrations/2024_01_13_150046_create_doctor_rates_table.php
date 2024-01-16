<?php

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
        Schema::create('doctor_rates', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Doctor::class)->constrained()->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignIdFor(Patient::class)->constrained()->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('response_speed')->default(5);
            $table->integer('service_quality')->default(5);
            $table->integer('problem_solving')->default(5);
            $table->decimal('overall_rate')->default(5);
            $table->longText('patient_notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_rates');
    }
};
