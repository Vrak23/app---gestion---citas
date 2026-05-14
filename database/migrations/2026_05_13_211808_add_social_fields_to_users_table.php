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
        Schema::table('users', function (Blueprint $column) {
            $column->string('password')->nullable()->change();
            $column->string('provider_name')->nullable()->after('password');
            $column->string('provider_id')->nullable()->after('provider_name');
            $column->string('provider_token')->nullable()->after('provider_id');
            $column->string('avatar')->nullable()->after('provider_token');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $column) {
            $column->string('password')->nullable(false)->change();
            $column->dropColumn(['provider_name', 'provider_id', 'provider_token', 'avatar']);
        });
    }
};
