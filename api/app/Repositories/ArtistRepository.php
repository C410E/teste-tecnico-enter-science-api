<?php

namespace App\Repositories;

use App\DTO\ArtistDTO;
use App\Models\Artist;
use App\Repositories\Interfaces\ArtistRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ArtistRepository implements ArtistRepositoryInterface
{
    protected $model;
    
    public function __construct(Artist $artist)
    {
        $this->model = $artist;
    }
    
    public function create(ArtistDTO $data)
    {
        return $this->model->create($data->toArray());
    }
    
    public function update(ArtistDTO $data)
    {
        if (!$data->id) {
            throw new \Exception("ID is required for update");
        }
        
        $artist = $this->model->findOrFail($data->id);
        $artist->update($data->toArray());
        
        return $artist;
    }
    
    public function delete(int $id)
    {
        return $this->model->destroy($id);
    }
    
    public function paginated(int $limit, int $page, array $filters): LengthAwarePaginator
    {
        $query = $this->model->query();
        
        foreach ($filters as $key => $value) {
            if (!empty($value)) {
                $query->where($key, 'like', "%{$value}%");
            }
        }
        
        return $query->paginate($limit, ['*'], 'page', $page);
    }
}