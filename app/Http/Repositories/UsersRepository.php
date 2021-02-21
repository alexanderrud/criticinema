<?php

namespace App\Http\Repositories;

use App\Models\Users;
use Illuminate\Database\Eloquent\Collection;

class UsersRepository
{
    public function getUsers(): Collection
    {
        return Users::all();
    }
}
