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
        Schema::create('reserve_slots', function (Blueprint $table) {
            $table->comment('予約枠');
            $table->id()->comment('予約枠ID');
            $table->foreignId('guest_room_id')->comment('客室ID')->constrained();
            $table->date('date')->comment('予約日');
            $table->boolean('is_status')->comment('予約ステータス');
            $table->timestamp('created_at')->comment('作成日時');
            $table->timestamp('updated_at')->comment('更新日時');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserve_slots');
    }
};