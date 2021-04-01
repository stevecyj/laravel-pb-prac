<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberSessionController extends Controller
{
    public function create()
    {
        return view('members.logIn');
    }

    public function store(Request $request)
    {
        $member = Member::where([
            'email' => $request->email,
            'password' => $request->password,
        ])->first();

        var_dump($member);
        // return redirect('/');
    }

    public function destroy(Request $request)
    {
        return redirect('/');
    }
}
