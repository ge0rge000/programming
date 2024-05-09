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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string("name_service");
            $table->string("icon")->nullable();
            $table->string("tag")->nullable();
            $table->string("small_desc")->nullable();
            $table->string('desc_1')->nullable();
            $table->string('desc_2')->nullable();
            $table->string('desc_3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
