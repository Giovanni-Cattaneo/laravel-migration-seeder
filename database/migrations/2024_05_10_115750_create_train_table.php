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
            $table->string('brand')->nullable();
            $table->string('departures_station');
            $table->string('arrival_station');
            $table->timestamp('departures_hour')->nullable();
            $table->timestamp('arrival_hour')->nullable();
            $table->integer('sku')->nullable();
            $table->integer('carriages')->nullable();
            $table->boolean('on_time')->nullable()->default(0);
            $table->boolean('canceled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('train');
    }
};
