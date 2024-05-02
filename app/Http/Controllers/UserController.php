<?php

namespace App\Http\Controllers;

use App\Data\UserData;

class UserController extends Controller
{
    protected $users = [
        [
            'id' => 1,
            'name' => 'Jesus',
            'email' => 'jesus@example.com',
        ],
        [
            'id' => 2,
            'name' => 'Jose',
            'email' => 'jose@example.com',
        ],
    ];

    public function index()
    {
        return hybridly()->view('users', [
            'users' => UserData::collect($this->users)
        ]);
    }

    public function show(int $id)
    {
        $user = collect($this->users)->firstWhere('id', $id);

        return hybridly()
            ->view('user-details', [
                'user' => UserData::from($user),
            ]);
    }
}
