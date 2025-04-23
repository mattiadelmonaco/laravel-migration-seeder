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
        Schema::table('trains', function (Blueprint $table) {
            $table->string("agency", 30);
            $table->string("departure_station", 50);
            $table->string("arrival_station", 50);
            $table->time("departure_time");
            $table->time("arrival_time");
            $table->string("train_code", 10)->unique();
            $table->unsignedTinyInteger("total_carriages");
            $table->boolean('on_time');
            $table->boolean('if_cancelled');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn("agency");
            $table->dropColumn("departure_station");
            $table->dropColumn("arrival_station");
            $table->dropColumn("departure_time");
            $table->dropColumn("arrival_time");
            $table->dropColumn("train_code");
            $table->dropColumn("total_carriages");
            $table->dropColumn("on_time");
            $table->dropColumn("if_cancelled");


        });
    }
};
