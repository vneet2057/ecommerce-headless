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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('category_name');
            $table->string('category_code')->unique();
            $table->unsignedBigInteger('primary_category_id')->nullable();
            $table->text('description')->nullable();
            $table->string('category_icon')->nullable();
            $table->enum('status',['Active','Disabled'])->default('Active');
            $table->timestamps();
            $table->foreign('primary_category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
