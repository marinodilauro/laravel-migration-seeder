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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 50);
            $table->string('departure_station', 100);
            $table->string('arriving_station', 100);
            $table->dateTime('departure_time');
            $table->dateTime('arriving_time');
            $table->string('train_code', 10);
            $table->tinyInteger('carriages')->nullable();
            $table->boolean('in_time')->default(1)->nullable();
            $table->boolean('cancelled')->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
