<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function create()
    {
        return view('members.register');
    }

    public function store()
    {
        return redirect('/');
    }
}
