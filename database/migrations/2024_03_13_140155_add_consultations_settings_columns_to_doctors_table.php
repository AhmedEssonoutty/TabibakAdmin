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
        Schema::table('doctors', function (Blueprint $table) {
            $table->float('urgent_consultation_price')->nullable();
            $table->float('with_appointment_consultation_price')->nullable();
            $table->tinyInteger('reminder_before_consultation')->nullable();
            $table->tinyInteger('consultation_period')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('doctors', function (Blueprint $table) {
            $table->dropColumn('urgent_consultation_price');
            $table->dropColumn('with_appointment_consultation_price');
            $table->dropColumn('reminder_before_consultation');
        });
    }
};
