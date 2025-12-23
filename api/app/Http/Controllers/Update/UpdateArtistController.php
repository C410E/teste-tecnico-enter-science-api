<?php 

namespace App\Http\Controllers\Update;

use App\DTO\ArtistDTO;
use App\Services\Update\UpdateArtistService;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateArtistRequest;

class UpdateArtistController extends Controller
{
    public function __construct(
        protected UpdateArtistService $updateArtistService
    )
    {}

    public function __invoke(UpdateArtistRequest $request, int $id) 
    {
        $request = $request->validated();
        $request['id'] = $id;

        $artist = new ArtistDTO(...$request);

        return $this->updateArtistService->handle($artist, $id);
    }
}