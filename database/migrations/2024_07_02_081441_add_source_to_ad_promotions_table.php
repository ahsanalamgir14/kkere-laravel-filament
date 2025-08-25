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
        Schema::table('ad_promotions', function (Blueprint $table) {
            $table->string('source')->nullable();
            $table->foreignId('subscription_id')->nullable()->constrained()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ad_promotions', function (Blueprint $table) {
            $table->dropColumn('source');
            $table->dropColumn('subscription_id');
        });
    }
};
