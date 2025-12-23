<?php 

namespace App\Services\Create;

use App\DTO\ArtistDTO;
use App\Repositories\Interfaces\ArtistRepositoryInterface;
use Illuminate\Support\Facades\DB;

class CreateArtistService
{
    public function __construct(protected ArtistRepositoryInterface $artistRepository)
    {
    }

    public function handle(ArtistDTO $data)
{
    try {
        
        DB::connection()->beginTransaction();
        
        $artist = $this->artistRepository->create($data);
         
        $artist->refresh();
        
        DB::connection()->commit();
        
        return $artist;
        
    } catch (\Exception $e) {  
        DB::connection()->rollBack();
        throw $e;
    }
}
}