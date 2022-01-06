<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserRepository
{
    public function save($request)
    {
        $user = User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'email' => $request->email
        ]);

        return $user;
    }
}
