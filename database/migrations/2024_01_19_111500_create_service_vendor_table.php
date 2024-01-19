<?php

use App\Models\Vendor;
use App\Models\VendorService;
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
        Schema::create('service_vendor', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(VendorService::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Vendor::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_vendor');
    }
};
