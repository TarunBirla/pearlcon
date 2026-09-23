<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('page_visits')) {
            Schema::create('page_visits', function (Blueprint $table) {
                $table->id();
                $table->string('page_name');
                $table->text('url');
                $table->string('ip_address')->index();
                $table->text('user_agent')->nullable();
                $table->string('browser')->nullable();
                $table->string('platform')->nullable();
                $table->string('device_type')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('page_visits');
    }
};
