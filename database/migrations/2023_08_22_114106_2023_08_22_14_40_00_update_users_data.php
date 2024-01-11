<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Roles;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string("mobile")->unique()->after("email");
            $table->unsignedBigInteger("user_role")->nullable()->after("mobile");
            $table->string("job_title")->after("user_role");
            $table->timestamp("birth_date")->nullable()->after("job_title");
            $table->integer("status")->after("birth_date");



            $table->foreign('user_role')->references('id')->on('roles')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('mobile');
            $table->dropColumn('birth_date');
            $table->dropColumn('user_role');
            $table->dropColumn('status');
            $table->dropColumn('job_title');
        });
    }
};
