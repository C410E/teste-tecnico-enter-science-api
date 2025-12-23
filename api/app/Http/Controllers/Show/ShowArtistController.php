<?php 

namespace App\Http\Controllers\Show;

use App\Http\Controllers\Controller;
use App\Services\Show\ShowArtistService;
use Illuminate\Http\Request;

class ShowArtistController extends Controller
{
    public function __construct(protected ShowArtistService $showArtistService)
    {}

    public function __invoke(Request $request)
    {
        $artist = $this->showArtistService->handle($request->id);
        return $this->send($artist);
    }
}