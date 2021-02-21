<?php

namespace App\Http\Controllers;

use App\Http\Repositories\UsersRepository;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    private UsersRepository $usersRepository;

    public function __construct(UsersRepository $usersRepository)
    {
        $this->usersRepository = $usersRepository;
    }

    public function getUsers()
    {
        return $this->usersRepository->getUsers();
    }
}
