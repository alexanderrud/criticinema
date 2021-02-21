<?php

namespace App\Http\Repositories;

use App\Models\Movies;
use Illuminate\Database\Eloquent\Collection;

class MoviesRepository
{
    public function getMovies(): Collection
    {
        return Movies::all();
    }
}
