<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberSessionController extends Controller
{
    public function create()
    {
        return view('members.logIn');
    }

    public function store(Request $request)
    {
        return redirect('/');
    }

    public function destroy(Request $request)
    {
        return redirect('/');
    }
}
