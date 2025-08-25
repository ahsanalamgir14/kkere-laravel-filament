<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->string('banner_type')->nullable(); // 'link' or 'html'
            $table->longText('html')->nullable(); // HTML content (if 'html' type is selected)
        });
    }

    public function down(): void
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->dropColumn([
                'banner_type',
                'html',
            ]);
        });
    }
};
