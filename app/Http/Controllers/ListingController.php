<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ListingController extends Controller
{
    public function index()
    {
        $listings = Listing::all();
        return response()->json($listings);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'location' => 'required',
            'price' => 'required',
            'rating' => 'required',
            'reviews' => 'required',
            'image' => 'required',
            'modelId' => 'required',
            'details' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $listing = new Listing();
        $listing->name = $request->input('name');
        $listing->location = $request->input('location');
        $listing->price = $request->input('price');
        $listing->rating = $request->input('rating');
        $listing->reviews = $request->input('reviews');
        $listing->image = $request->input('image');
        $listing->modelId = $request->input('modelId');
        $listing->details = $request->input('details');
        $listing->save();

        return response()->json($listing, 201);
    }



    // Implement other methods for CRUD operations
    // such as store(), show(), update(), and destroy()
}
