<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberSessionController extends Controller
{
    public function create()
    {
        // $value = session('test_key','default'); //預設值
        // session(["test_key"=>"new value",
        //         "test_key1" => "new value2"
        //         ]); // 儲存 new session
        // var_dump($value);
        // dd($value);

        // 所有 session
        // dd(session()->all());

        // has()
        // if(session()->has('test_key')){
        //     dd(session()->all());
        // }

        /*
        |--------------------------------------------------------------------------
        | array
        |--------------------------------------------------------------------------
        |
        */

        var_dump(session('user.teams'));
        echo "<hr/>";

        session()->put('user.teams',[]);
        var_dump(session('user.teams'));
        echo "<hr/>";

        session()->push('user.teams','developers');
        var_dump(session('user.teams'));
        echo "<hr/>";

        // return view('members.logIn');
    }

    public function store(Request $request)
    {
        $member = Member::where([
            'email' => $request->email,
            'password' => $request->password,
        ])->first();

        // var_dump($member);
        dd($member);
        // return redirect('/');
    }

    public function destroy(Request $request)
    {
        return redirect('/');
    }
}
