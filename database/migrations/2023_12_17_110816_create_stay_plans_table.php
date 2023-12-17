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
        Schema::create('stay_plans', function (Blueprint $table) {
            $table->comment('宿泊プラン');
            $table->id()->comment('宿泊プランID');
            $table->foreignId('reserve_slot_id')->comment('予約枠ID')->constrained();
            $table->string('title')->comment('タイトル');
            $table->string('description')->comment('説明');
            $table->unsignedMediumInteger('fee')->comment('料金');
            $table->timestamp('created_at')->comment('作成日時');
            $table->timestamp('updated_at')->comment('更新日時');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stay_plans');
    }
};
