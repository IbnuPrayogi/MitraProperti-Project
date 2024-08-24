<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class UserPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function fetchRUmah()
    {
        $property=Property::where('category','home')->get();
        $title = "Rumah";
        $banner = "rumah_banner.png";
        $description = "Wujudkan mimpi memiliki rumah idamanmu bersama Linktown. Linktown akan
                membantumu dengan pilihan hunian yang sangat menarik!";
        $regencies = Property::select('regency', DB::raw('COUNT(*) as count'))
                ->where('category','home')
                ->groupBy('regency')
                ->orderByDesc('count')
                ->take(6)
                ->pluck('regency');
        return view('user.property.index',compact('property','title','banner','description','regencies'));
        //
    }

    public function fetchApartment()
    {
        $property=Property::where('category','apartment')->get();
        $title = "Apartment";
        $banner = "apartment_banner.png";
        $description = "Mitra Property Bogor memiliki banyak pilihan apartment yang dapat menjadi pilihan
                terbaik untuk solusi hunianmu.";
        $regencies = Property::select('regency', DB::raw('COUNT(*) as count'))
                ->where('category','apartment')
                ->groupBy('regency')
                ->orderByDesc('count')
                ->take(6)
                ->pluck('regency');
        return view('user.property.index',compact('property','title','banner','description','regencies'));
        //
    }

    public function fetchKavling()
    {
        $property=Property::where('category','kavling')->get();
        $title = "Kavling";
        $banner = "gudang_banner.png";
        $description = "Mitra Property Bogor memiliki banyak pilihan gudang yang dapat menjadi pilihan
                terbaik untuk lahan menyimpan barang!.";
        $regencies = Property::select('regency', DB::raw('COUNT(*) as count'))
                ->where('category','kavling')
                ->groupBy('regency')
                ->orderByDesc('count')
                ->take(6)
                ->pluck('regency');
        return view('user.property.index',compact('property','title','banner','description','regencies'));
        //
    }

    public function fetchRuko()
    {
        $property=Property::where('category','ruko')->get();
        $title = "Ruko";
        $banner = "ruko_banner.png";
        $description = "Wujudkan mimpi memiliki ruko idamanmu bersama Mitra Property Bogor. Mitra Property
                Bogor akan membantumu dengan pilihan hunian yang sangat menarik!";
        $regencies = Property::select('regency', DB::raw('COUNT(*) as count'))
                ->where('category','ruko')
                ->groupBy('regency')
                ->orderByDesc('count')
                ->take(6)
                ->pluck('regency');
        return view('user.property.index',compact('property','title','banner','description','regencies'));
        //
    }

    public function fetchGudang()
    {
        $property=Property::where('category','gudang')->get();
        $title = "Gudang";
        $banner = "gudang_banner.png";
        $description = "Mitra Property Bogor memiliki banyak pilihan gudang yang dapat menjadi pilihan
                terbaik untuk lahan menyimpan barang!.";
        $regencies = Property::select('regency', DB::raw('COUNT(*) as count'))
                ->where('category','gudang')
                ->groupBy('regency')
                ->orderByDesc('count')
                ->take(6)
                ->pluck('regency');
        return view('user.property.index',compact('property','title','banner','description','regencies'));
        //
    }

    public function fetchOffice()
    {
        $property=Property::where('category','office')->get();
        $title = "Office";
        $banner = "ruko_banner.png";
        $description = "Wujudkan mimpi memiliki kantor idamanmu bersama Mitra Property Bogor. Mitra Property
                Bogor akan membantumu dengan pilihan hunian yang sangat menarik!";
        $regencies = Property::select('regency', DB::raw('COUNT(*) as count'))
                ->where('category','office')
                ->groupBy('regency')
                ->orderByDesc('count')
                ->take(6)
                ->pluck('regency');
        return view('user.property.index',compact('property','title','banner','description','regencies'));
        //
    }

    public function fetchRegencies($propertyType)
    {
        $regencies = Property::where('category', $propertyType)->distinct()->pluck('regency');
        return response()->json($regencies);
    }

        // app/Http/Controllers/PropertyController.php
    public function getRegenciesByCategory($category)
    {
        // Fetch distinct regencies for properties matching the category
        $regenciess = Property::where('category', $category)->distinct()->pluck('regency');
      
        
        return response()->json($regenciess);
    }

    public function searchProperties(Request $request, $type)
    {
        // Initialize the query
        $query = Property::where('category', $type);

        // Filter by regency if provided
        if ($request->has('regency') && $request->regency !== '') {
            $query->where('regency', $request->regency);
        }

        // Sort by the specified field if provided
        if ($request->has('sortBy')) {
            $query->orderBy($request->sortBy, 'asc'); // or 'desc'
        }

        // Fetch the filtered properties
        $property = $query->get();

        // Fetch regencies for the dropdown
        $regencies = Property::select('regency', DB::raw('COUNT(*) as count'))
            ->where('category', $type)
            ->groupBy('regency')
            ->orderByDesc('count')
            ->take(6)
            ->pluck('regency');

        // Define other variables for the view

        $title = ucfirst($type);
        $banner = $type . '_banner.png'; // Adjust as needed
        if($type == 'home'){
            $banner = "rumah_banner.png";
        }
        $description = "Mitra Property Bogor memiliki banyak pilihan " . $type . " yang dapat menjadi pilihan terbaik untuk lahan menyimpan barang!.";

        // Return the view with the filtered properties and other variables
        return view('user.property.index', compact('property', 'title', 'banner', 'description', 'regencies'));
    }

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
    public function show($id)
    {
        $property = Property::where('id',$id)->get()->first();

        $directoryPath = "public/images/".$property->id."/";
    
        // Check if directory exists
        if (!Storage::exists($directoryPath)) {
            return view('user.detail', ['property','images' => []]); // If no directory, return an empty array
        }
    
        // Get all files from the directory
        $files = Storage::files($directoryPath);
        
        // Filter image files (optional, to ensure only images are processed)
        $images = array_filter($files, function ($file) {
            return preg_match('/\.(jpeg|jpg|png|gif)$/i', $file);
        });

   
   
        return view('user.detail',compact('property','images'));
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
