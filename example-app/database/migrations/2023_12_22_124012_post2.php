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
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $table->id();
        $table->string('title');
        $table->text('body');
        $table->boolean('is_published')->default(0);
        $table->string('image');
        $table->timestamps();
    }
};
