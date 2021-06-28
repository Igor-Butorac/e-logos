<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Client;
use DB;
use Auth;

class DashboardController extends Controller
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
    public function index()
    {
        $clients = DB::table('clients')->select('id','name','lastname','in_therapy')->orderBy('created_at','ASC')->where('therapists_id','=',Auth::user()->id)->get();
        return view('dashboard')->with('clients', $clients);
    }
}
