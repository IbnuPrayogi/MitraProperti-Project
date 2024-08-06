<?php

namespace App\Http\Controllers\User;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regencies = Property::select('regency', DB::raw('COUNT(*) as count'))
            ->groupBy('regency')
            ->orderByDesc('count')
            ->take(6)
            ->pluck('regency');

// Step 2: For each selected regency, get the lowest price property
        $topproperties = Property::whereIn('regency', $regencies)
            ->select('name', 'price', 'category', 'cluster_type', 'province', 'regency', 'district', 'village', 
                'location', 'toilet', 'bedroom', 'surface_area', 'building_area', 'floor', 
                'carport', 'description', 'mosque', 'jogging', 'sports', 'child', 'pool', 'instalment', 'picture')
            ->whereIn('id', function($query) {
                $query->select(DB::raw('MIN(id)'))
                    ->from('properties')
                    ->groupBy('regency');
            })
            ->orderBy('price', 'asc')
            ->get();


            $newestProperties = Property::latest()->take(12)->get();
            $firstPart = $newestProperties->slice(0, 4);
            $secondPart = $newestProperties->slice(4, 4);
            $thirdPart = $newestProperties->slice(8, 4);
            $regencies = Property::distinct()->pluck('regency')->take(6);
            $bottomproperties = Property::all();

            
          
            
            return view('user.home', compact('topproperties','firstPart', 'secondPart', 'thirdPart','regencies','bottomproperties'));
    }

        // Display the result
       
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        //
    }
}
