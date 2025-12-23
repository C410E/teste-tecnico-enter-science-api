<?php 

namespace App\Repositories\Interfaces;

use App\DTO\ArtistDTO;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface ArtistRepositoryInterface
{
    public function create(ArtistDTO $data);
    public function update(ArtistDTO $data);
    public function delete(int $id);
    public function paginated(int $limit, int $page, array $filters): LengthAwarePaginator;
}