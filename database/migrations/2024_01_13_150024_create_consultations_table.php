<?php

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\RelativeRelation;
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
            $table->foreignIdFor(Patient::class);
            $table->foreignIdFor(RelativeRelation::class, 'relative_id');
            $table->foreignIdFor(Doctor::class);
            $table->longText('case_description');
            $table->integer('reports_exists');
            $table->json('attachments');
            $table->string('consultation_type');
            $table->time('consultation_time');
            $table->integer('notification_status');
            $table->decimal('consultation_price');
            $table->json('existing_diseases');
            $table->text('not_listed_diseases');
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
