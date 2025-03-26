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
        Schema::create('rewards', function (Blueprint $table) {
            $table->id();
            $table->user();
            $table->created_at();
            $table->updated_at();
            $table->created_by_id();
            $table->updated_by_id();
            $table->type();
            $table->unit();
            $table->amount();
            $table->description();
            $table->code();
            $table->limit();
            $table->expired_date();
            $table->is_publish();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rewards');
    }
};
