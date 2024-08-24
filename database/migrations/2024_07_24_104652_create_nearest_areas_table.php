<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('nearest_areas', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->foreignId('property_id')->constrained()->onDelete('cascade'); // Foreign key reference to property table
            $table->string('name'); // Name of the nearest area
            $table->decimal('distance', 8, 2); // Distance from the property (e.g., in kilometers)
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nearest_areas');
    }
};
