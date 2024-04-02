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
        Schema::create('divisions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('division_name', 50); // Changed column name to follow Laravel naming conventions
            $table->integer('superbowl_titles_in_division')->notNull(); // Assuming 'superbowl titles in division' is a count of titles
            $table->timestamps(); // This creates 'created_at' and 'updated_at' columns
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('divisions');
    }
};
