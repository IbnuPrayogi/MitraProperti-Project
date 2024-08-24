<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NearestArea extends Model
{
    use HasFactory;

    protected $table = "nearest_areas";

    protected $fillable = [
        'property_id',   // Foreign key to the Property model
        'name',          // Name of the nearest area
        'distance',      // Distance to the nearest area
    ];

    // The attributes that should be cast to native types
    protected $casts = [
        'distance' => 'float', // Ensure distance is handled as a float
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
