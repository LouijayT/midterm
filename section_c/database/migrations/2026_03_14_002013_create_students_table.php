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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sku');
            $table->timestamp('discription')->nullable();
            $table->string('category');
            $table->decimal('price');
            $table->string('cost_price',10,2);
            $table->integer('stock');
            $table->integer('min_stick_level');
            $table->string('supplier_name');
            $table->text('supplier_contact')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
