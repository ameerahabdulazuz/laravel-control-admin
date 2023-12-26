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
        Schema::table('example_test', function (Blueprint $table) {
        $table->text('body');
        $table->boolean('is_published')->default(0);
        $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('example_test', function (Blueprint $table) {
            //
        });
    }
};
