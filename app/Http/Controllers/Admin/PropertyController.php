<?php

namespace App\Http\Controllers\Admin;

use App\Models\Regency;
use App\Models\Village;
use App\Models\District;
use App\Models\Property;
use App\Models\Province;
use App\Models\NearestArea;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
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
        $regencies = Property::select('regency')->distinct()->get();
        $categories = Property::select('category')->distinct()->get();
        return view('admin.property.index', compact('properties','regencies','categories'));
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

        $property = Property::create($data);

        $nameId = $property->id;
        $folderPath = 'public/images/' . $nameId; // Folder path based on name_id

        // Check if the folder exists, if not, create it
        if (!Storage::exists($folderPath)) {
            Storage::makeDirectory($folderPath);
        }

       

        $filePaths = [];
        if($data['pictures']) {
            foreach ($data['pictures'] as $file) {
                $filename = $file->getClientOriginalName();
                $path = $file->storeAs($folderPath, $filename); // Store file in the folder
                $filePaths[] = $path;
            }
        }

        if($request->hasAny('area1')){
            NearestArea::create([
                'property_id' => $property->id,
                'name' =>$data['area1'],
                'distance' =>$data['distance1'],
            ]);
        }

        if($request->hasAny('area2')){
            NearestArea::create([
                'property_id' => $property->id,
                'name' =>$data['area2'],
                'distance' =>$data['distance2'],
            ]);
        }

        if($request->hasAny('area3')){
            NearestArea::create([
                'property_id' => $property->id,
                'name' =>$data['area3'],
                'distance' =>$data['distance3'],
            ]);
        }

        

        return redirect()->route('property.index')->with('success', 'Property created successfully.');
    }

    public function update(UpdatePropertyRequest $request, Property $property)
    {
        try{
          
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
        catch (\Illuminate\Validation\ValidationException $e) {
            // This will catch validation errors and provide a response
            return response()->json(['errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            // This will catch any other errors
            return response()->json(['error' => $e->getMessage()], 500);
        }

        

        
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


    public function filteredProperties($category)
    {
       

        if ($category) {
            $properties = Property::where('category', $category)->get();
        } else {
            $properties = Property::all();
        }
       

        $regencies = Regency::all();
        $categories = Property::select('category')->distinct()->get();
   

        return view('admin.property.index', [
            'properties' => $properties,
            'regencies' => $regencies,
            'categories' => $categories
        ]);
    }
}
