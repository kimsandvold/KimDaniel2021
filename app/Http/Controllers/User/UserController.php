<?php

namespace App\Http\Controllers\User;

use Illuminate\Routing\Controller as BaseController;
use App\Model\User;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        return view('_user/user', ['users' => $users]);
    }

    public function me()
    {
        return view('_user/me');
    }
}
