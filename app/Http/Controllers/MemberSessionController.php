<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Libraries\MemberAuth;

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
        | array，存取 session
        |--------------------------------------------------------------------------
        |
        */

        // var_dump(session('user.teams'));
        // echo "<hr/>";

        // session()->put('user.teams',[]);
        // var_dump(session('user.teams'));
        // echo "<hr/>";

        // session()->push('user.teams','developers');
        // var_dump(session('user.teams'));
        // echo "<hr/>";

        // $value = session()->pull('user.teams','default');
        // var_dump($value);
        // echo "<hr/>";
        // var_dump(session('user.teams'));

        /*
        |--------------------------------------------------------------------------
        | array，存取 session
        |--------------------------------------------------------------------------
        |
        */

        $member = null;
        if(session()->exists('memberId')){
            $member=Member::find(session('memberId'));
        }

        return view('members.logIn',[
            'member' => $member
        ]);
    }

    public function store(Request $request)
    {
        $member = Member::where([
            'email' => $request->email,
            'password' => $request->password,
        ])->first();

        // var_dump($member);
        // dd($member);

        // write into session
        // if(!empty($member)){
        //     session(['memberId' => $member->email]);
        // }
        // dump(session()->all());
        // dd(session()->all());

        // from Libraries
        MemberAuth::logIn(
            $request->email,
            $request->password
        );

        // return redirect()->route('members.session.create');


        // return redirect('/');
    }

    public function destroy(Request $request)
    {
        // delete session
        // session()->forget('memberId');
        // session()->flush();
        // dump(session()->all());
        // dump('123');

        // from Libraries
        MemberAuth::logOut();

        // return redirect('/')->route('members.session.create');
    }
}
