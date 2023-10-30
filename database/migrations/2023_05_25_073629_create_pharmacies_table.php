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
        Schema::create('pharmacies', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('Pharmacy_id')->constrained('users','id')->cascadeOnDelete();
            // $table->foreignId('Duty_day_id')->constrained('duty_days','id')->cascadeOnDelete();
            $table->string ('Pharmacy_name');
            $table->integer ('Pharmacy_number')->unique();
            $table->string ('Area');
            $table->string ('City');
            // $table->double ('X_address');
            // $table->double ('Y_address');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pharmacies');
    }
};
