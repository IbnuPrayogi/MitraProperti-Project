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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price'); 
            $table->string('category');
            $table->string('cluster_type');
            $table->string('province');
            $table->string('regency');
            $table->string('district');
            $table->string('village');
            $table->string('location');
            $table->integer('toilet');
            $table->integer('bedroom');
            $table->integer('surface_area');
            $table->integer('building_area');
            $table->integer('carport');
            $table->integer('floor');
            $table->text('description');
            $table->boolean('mosque');
            $table->boolean('jogging');
            $table->boolean('sports');
            $table->boolean('child');
            $table->boolean('pool');
            $table->integer('instalment'); 
            $table->string('picture')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property');
    }
};
