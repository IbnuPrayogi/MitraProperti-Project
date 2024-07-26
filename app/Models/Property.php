<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $table = "properties";

    protected $fillable = [
        'name', 'price', 'category','cluster_type', 'province', 'regency', 'district', 'village',
        'location', 'toilet', 'bedroom', 'surface_area', 'building_area','floor', 
        'carport', 'description', 'mosque', 'jogging', 'sports', 'child', 'pool', 
        'additional_features', 'instalment', 'picture'
    ];

    // Specify the attributes that should be cast to native types
    protected $casts = [
        'mosque' => 'boolean',
        'jogging' => 'boolean',
        'sports' => 'boolean',
        'child' => 'boolean',
        'pool' => 'boolean',
        'price' => 'decimal:2',
        'instalment' => 'decimal:2',
    ];



    public function nearestAreas()
    {
        return $this->hasMany(NearestArea::class);
    }

}
