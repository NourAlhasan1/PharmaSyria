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
        Schema::table('pharmacies', function (Blueprint $table) {
            $table->string ('Pharmacy_name')->nullable()->change();
            $table->integer ('Pharmacy_number')->nullable()->change();
            $table->string ('Area')->nullable()->change();
            $table->string ('City')->nullable()->change();
            $table->decimal('latitude',9, 6)->nullable()->change();
            $table->decimal('longitude',9, 6)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pharmacies', function (Blueprint $table) {
            //
        });
    }
};
