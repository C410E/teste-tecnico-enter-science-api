<?php 

namespace App\Http\Controllers\Delete;

use App\Models\Artist;
use App\Http\Controllers\Controller;

class DeleteArtistController extends Controller
{
    public function __invoke(int $id)
    {
       return $this->send(Artist::find($id)->delete());
    }
}