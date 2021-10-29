<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
          
            if ($user = auth()->user()) {
                $users = DB::table('users')
                    ->where('id', $user->id)
                    ->get();
            } else {
                exit;
            }
            if ($users[0]->leve != 1) {
                exit;
            }
            return $next($request);
        });
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        $users = DB::table('users')
            ->where('id', $user->id)
            ->get();
        return view('admin.index',compact('users'));
    }
}
