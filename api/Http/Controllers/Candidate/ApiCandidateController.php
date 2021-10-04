<?php

namespace Api\Http\Controllers\Candidate;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Model\User;

class ApiCandidateController extends BaseController
{
    public function index()
    {
        // TODO add real data...
        $users = User::all();
        return $users;
    }
}
