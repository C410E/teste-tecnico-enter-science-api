<?php

namespace App\Services\Show;

use App\Models\Artist;
use DomainException;

class ShowArtistService
{
    protected Artist $artist;

    public function __construct(Artist $artist)
    {
        $this->artist = $artist;
    }

    public function handle(int $id): Artist
    {
        $artist = $this->artist->find($id);

        if (!$artist) {
            throw new DomainException('Artist not found');
        }

        return $artist;
    }
}