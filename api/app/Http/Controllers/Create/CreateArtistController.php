<?php

namespace App\Http\Controllers\Create;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateArtistRequest;
use App\Services\Create\CreateArtistService;
use App\DTO\ArtistDTO;

class CreateArtistController extends Controller 
{
    public function __construct(
        protected CreateArtistService $createArtistService
    ) {}

    public function __invoke(CreateArtistRequest $request)
    {

        $validatedData = $request->validated();
        
        $artist = new ArtistDTO(...$validatedData);
        
        return $this->createArtistService->handle($artist);
    }
}