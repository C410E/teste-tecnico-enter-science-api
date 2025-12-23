<?php 

namespace App\Services\Update;

use App\DTO\ArtistDTO;
use App\Repositories\Interfaces\ArtistRepositoryInterface;

class UpdateArtistService
{
    public function __construct(
        private ArtistRepositoryInterface $artistRepository
    ){}

    public function handle(ArtistDTO $data, int $id)
    {
        return $this->artistRepository->update($data, $id);
    }
}