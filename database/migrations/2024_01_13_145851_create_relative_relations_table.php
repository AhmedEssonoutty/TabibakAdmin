<?php

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
        Schema::create('relative_relations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('national_id')->unique();
            $table->enum('gender', ['male', 'female']);
            $table->date('birth_date');
            $table->foreignIdFor(Patient::class)->constrained()->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('patient_level', ['0', '1']);
            $table->enum('relative_relation', ['wife', 'husband', 'son', 'daughter', 'mother', 'father']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relative_relations');
    }
};
