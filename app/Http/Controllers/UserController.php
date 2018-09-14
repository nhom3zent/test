<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreUser;
use App\Jobs\SendWelcomeEmail;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('home', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(StoreUser $request)
    {
        $data = $request->all();
        $user = User::create($data);

        SendWelcomeEmail::dispatch($user)->delay(now()->addMinutes(1));
        $request->session()->flash('alert-success', 'User was successful added!');
        return redirect()->back();
    }
}
