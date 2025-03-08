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
        Schema::table('polydock_store_apps', function (Blueprint $table) {
            $table->renameColumn('class', 'polydock_app_class');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('polydock_store_apps', function (Blueprint $table) {
            $table->renameColumn('polydock_app_class', 'class');
        });
    }
};
