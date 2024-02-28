<?php

use App\Models\DoctorScheduleDay;
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
        Schema::create('doctor_schedule_day_shifts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(DoctorScheduleDay::class)->constrained()->cascadeOnDelete();
            $table->time('from_time');
            $table->time('to_time');
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('doctor_schedule_day_shifts');
    }
};
