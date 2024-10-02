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
        Schema::create('package', function (Blueprint $table) {
            $table->id();
            $table->details();
            $table->cover_img();
            $table->created_at();
            $table->updated_at();
            $table->created_by_id();
            $table->updated_by_id();
            $table->type();
            $table->service();
            $table->price();
            $table->amount();
            $table->platform();
            $table->is_publish();
            $table->topic();
            $table->expired_at();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package');
    }
};
