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
            $table->datetime('departure_time', 4);
            $table->datetime('arriving_time', 4);
            $table->bigInteger('train_code');
            $table->tinyInteger('carriages')->nullable();
            $table->boolean('in_time')->default(1)->nullable();
            $table->boolean('cancelled')->default(1)->nullable();
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
