<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterStoreRequest;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function create()
    {
        return view('register');
    }

    public function store(RegisterStoreRequest $request)
    {
       
        $user = $this->userRepository->save($request);
        if (!is_null($user)) 
        {
            Auth::Login($user);
            return view('/')->with("success", "all fields are required");
        }
        return back()->with("failed", "all fields are required");
    }
}
