<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ShortLink;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate();

        return view('users.index', compact('users'));
    }
    public function shorturl(){
        $sho_links=ShortLink::paginate();

        return view('link_list.index', compact('sho_links'));
    }
}
