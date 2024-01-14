<?php

use App\Models\Consultation;
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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Patient::class);
            $table->foreignIdFor(RelativeRelation::class, 'relative_id');
            $table->foreignIdFor(Consultation::class);
            $table->decimal('consultation_price');
            $table->decimal('tax_fees');
            $table->bigInteger('voucher_code');
            $table->decimal('final_price');
            $table->dateTime('contact_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
