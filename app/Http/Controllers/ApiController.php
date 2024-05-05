<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Product;

class ApiController extends Controller
{

    public function getproductsdata()
    {
        $products = Product::all();
        return response()->json(['products' => $products]);
    }

    public function postData(Request $request)
    {
        try {
            $xproduct = new Product();
            $xproduct->name = $request->name;
            $xproduct->description = $request->description;
            $xproduct->imagepath = $request->imagepath; // Added line
            $xproduct->save();

            return response()->json(['message' => 'Data submitted successfully'], 201);
        } catch (\Exception $e) {
            return response()->json([
                'request' => $request,
                'error' => 'Failed to submit data'
            ], 500);
        }
    }


}
