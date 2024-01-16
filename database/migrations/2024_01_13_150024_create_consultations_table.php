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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Patient::class)->constrained()->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('relative_id')->unsigned();
            $table->foreignIdFor(Doctor::class)->constrained()->references('id')->onUpdate('cascade')->onDelete('cascade');
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

            $table->foreign('relative_id')->references('id')->on('relative_relations')->constrained()->onUpdate('cascade')->onDelete('cascade');
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
