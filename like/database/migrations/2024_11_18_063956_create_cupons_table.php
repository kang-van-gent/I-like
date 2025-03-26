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
        Schema::create('cupons', function (Blueprint $table) {
            $table->id();
            $table->code();
            $table->created_at();
            $table->updated_at();
            $table->created_by_id();
            $table->updated_by_id();
            $table->limit();
            $table->expired_date();
            $table->amount();
            $table->type();
            $table->unit();
            $table->description();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cupons');
    }
};
