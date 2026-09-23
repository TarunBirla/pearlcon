<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('registration_requests')) {
            Schema::create('registration_requests', function (Blueprint $table) {
                $table->id();
                $table->string('full_name');
                $table->string('company')->nullable();
                $table->string('phone');
                $table->string('email');
                $table->string('item_part_number');
                $table->text('activities');
                $table->text('description_manufacturer_quantity');
                $table->string('ip_address')->nullable();
                $table->string('status')->default('New');
                $table->timestamps();
            });
        } else {
            Schema::table('registration_requests', function (Blueprint $table) {
                if (!Schema::hasColumn('registration_requests', 'ip_address')) {
                    $table->string('ip_address')->nullable()->after('description_manufacturer_quantity');
                }
                if (!Schema::hasColumn('registration_requests', 'status')) {
                    $table->string('status')->default('New')->after('ip_address');
                }
            });
        }
    }

    public function down(): void
    {
        // Keep existing table safe
    }
};
