<?php

namespace App\Services\Deezer;

use Illuminate\Support\Facades\Http;

class DeezerArtistService
{
    private string $baseUrl = 'https://api.deezer.com';

    public function search(string $query, int $limit = 12): array
    {
        $response = Http::get("{$this->baseUrl}/search/artist", [
            'q' => $query,
            'limit' => $limit,
        ]);

        if ($response->failed()) {
            return [];
        }

        return $response->json('data') ?? [];
    }
}
