<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Auth;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $reques)
    {
        // 로그아웃 상태 로그인 페이지로 리디렉트
        $you = auth()->user();
        if(true == empty($you))
        {
            return redirect()->route('login');
        }
        return view('welcome');
    }
}
