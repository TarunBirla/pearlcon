<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ip_geo_caches')) {
            Schema::create('ip_geo_caches', function (Blueprint $table) {
                $table->id();
                $table->string('ip_address')->unique();
                $table->string('country')->nullable();
                $table->string('region')->nullable();
                $table->string('city')->nullable();
                $table->string('status')->default('fail');
                $table->timestamp('resolved_at')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ip_geo_caches');
    }
};
