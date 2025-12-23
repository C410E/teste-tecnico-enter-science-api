<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistIndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $artists = Artist::all();
        
        return response()->json([
            'status' => 200,
            'data' => $artists,
            'message' => 'Artists retrieved successfully'
        ]);
    }
}