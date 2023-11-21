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
        Schema::create('contributions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('requested_contribution_id')->constrained()->onDelete('cascade');
            // $table->foreignId('contributor_id')->constrained()->onDelete('cascade'); 
            $table->foreignId('contributor_id')->references('id')->on('users')->onDelete('cascade'); 

            $table->string('contribution_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contributions');
    }
};
