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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->cascadeOnDelete();
            $table->text('number')->nullable();
            $table->text('billing_email')->nullable();
            $table->text('billing_name')->nullable();
            $table->text('billing_address')->nullable();
            $table->text('billing_city')->nullable();
            $table->text('billing_state')->nullable();
            $table->text('billing_zip_code')->nullable();
            $table->decimal('billing_subtotal',10,2);
            $table->decimal('billing_total',10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
