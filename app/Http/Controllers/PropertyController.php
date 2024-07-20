<?php

namespace App\Http\Controllers;

use App\Models\Regency;
use App\Models\Village;
use App\Models\District;
use App\Models\Property;
use App\Models\Province;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePropertyRequest;
use App\Http\Requests\UpdatePropertyRequest;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = Property::all();
        return view('admin.property.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provincies=Province::all();
        $regencies=Regency::all();
        $villages=Village::all();
        $districts=District::all();
        return view("admin.property.create",compact('provincies'));
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePropertyRequest $request)
    {
        $data = $request->validated();
        
        if ($request->hasFile('picture')) {
            $data['picture'] = $request->file('picture')->getClientOriginalName();
            $request->file('picture')->storeAs('pictures', $data['picture'], 'public');
        }

        $province = Province::where('id',$data['province'])->first();
        $data['province'] = $province->name;
        $regency = Regency::where('id',$data['regency'])->first();
        $data['regency'] = $regency->name;
        $district = District::where('id',$data['district'])->first();
        $data['district'] = $district->name;
        $village = Village::where('id',$data['village'])->first();
        $data['village'] = $village->name;

        Property::create($data);

        return redirect()->route('properties.create')->with('success', 'Property created successfully.');
    }

    public function update(UpdatePropertyRequest $request, Property $property)
    {
        $data = $request->validated();
        
        if ($request->hasFile('picture')) {
            // Remove old picture if exists
            if ($property->picture) {
                Storage::delete('public/pictures/' . $property->picture);
            }
            $data['picture'] = $request->file('picture')->getClientOriginalName();
            $request->file('picture')->storeAs('pictures', $data['picture'], 'public');
        }

        $property->update($data);

        return redirect()->route('properties.index')->with('success', 'Property updated successfully.');
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
    public function edit($id)
    {
        $property = Property::findOrFail($id);
        $provincies = Province::all();
        $regencies = Regency::where('province_id', $property->province)->get();
        $districts = District::where('regency_id', $property->regency)->get();
        $villages = Village::where('district_id', $property->district)->get();
        
        return view('admin.property.edit', compact('property', 'provincies', 'regencies', 'districts', 'villages'));
    }

    /**
     * Update the specified resource in storage.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $property = Property::findOrFail($id);

        // Optionally, delete the associated picture from the server
        if ($property->picture) {
            $picturePath = public_path('images') . '/' . $property->picture;
            if (file_exists($picturePath)) {
                unlink($picturePath);
            }
        }

        $property->delete();

        return redirect()->route('property.index')->with('success', 'Property deleted successfully');
    }
}
