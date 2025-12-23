<?php

namespace App\Http\Controllers\Artist;

use App\Http\Controllers\Controller;
use App\Services\Deezer\DeezerArtistService;
use Illuminate\Http\Request;

class SearchArtistController extends Controller
{
    public function __construct(
        protected DeezerArtistService $deezerArtistService
    ) {}
    public function __invoke(Request $request)
    {
        $request->validate([
            'search' => ['required', 'string', 'min:2'],
        ]);

        $artists = $this->deezerArtistService->search(
            $request->get('search')
        );

        return response()->json([
            'data' => $artists,
        ]);
    }
}
