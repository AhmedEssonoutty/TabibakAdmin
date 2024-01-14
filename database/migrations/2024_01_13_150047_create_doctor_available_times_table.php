<?php

use App\Models\Doctor;
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
        Schema::create('doctor_available_times', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Doctor::class);
            $table->string('day');
            $table->json('times');
            $table->string('consultation_time');
            $table->string('consultation_gap');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_available_times');
    }
};
