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
        Schema::table('products', function (Blueprint $table) {
            $table->decimal('weight',10,2)->default(0);
            $table->decimal('height',10,2)->default(0);
            $table->decimal('width',10,2)->default(0);
            $table->decimal('length',10,2)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->decimal('weight',10,2);
            $table->decimal('height',10,2);
            $table->decimal('width',10,2);
            $table->decimal('length',10,2);
        });
    }
};
