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
        Schema::create('medical_statuses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('relative_id')->unsigned();
            $table->double('height');
            $table->double('weight');
            $table->enum('blood_type', ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-']);
            $table->json('chronic_diseases');
            $table->text('other_diseases');
            $table->text('previous_surgeries');
            $table->timestamps();

            $table->foreign('relative_id')->references('id')->on('relative_relations')->constrained()->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_statuses');
    }
};
