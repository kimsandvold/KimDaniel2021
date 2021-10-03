<?php

namespace App\Http\Controllers\Candidate;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Model\User;

class CandidateController extends BaseController
{
    public function index()
    {
        $users = User::all();
        return view('_candidate/candidates', ['candidates' => $users]);
    }
}
