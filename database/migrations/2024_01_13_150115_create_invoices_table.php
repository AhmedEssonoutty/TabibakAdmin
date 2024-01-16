<?php

use App\Models\Consultation;
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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Patient::class)->constrained()->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('relative_id')->unsigned();
            $table->foreignIdFor(Consultation::class)->constrained()->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->decimal('consultation_price');
            $table->decimal('tax_fees');
            $table->bigInteger('voucher_code');
            $table->decimal('final_price');
            $table->dateTime('contact_time');
            $table->timestamps();

            $table->foreign('relative_id')->references('id')->on('relative_relations')->constrained()->onUpdate('cascade')->onDelete('cascade');
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
