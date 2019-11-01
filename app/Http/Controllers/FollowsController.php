<?php

namespace LaspoGram\Http\Controllers;

use Illuminate\Http\Request;
use LaspoGram\User;

class FollowsController extends Controller
{
    public function __constructor()
    {
        $this->middleware('auth');
    }

    public function store(User $user)
    {
        return auth()->user()->following()->toggle($user->profile);
    }
}
