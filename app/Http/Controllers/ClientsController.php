<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\User;
use DB;
use Auth;

class ClientsController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sp_therapist = DB::table('users')->pluck('name', 'id');
        $clients = Client::orderBy('lastname', 'asc')->paginate(10);
        return view('clients.index')
        ->with('clients', $clients)
        ->with('sp_therapist', $sp_therapist);
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sp_therapist = DB::table('users')->pluck('name', 'id');
        return view('clients.create')
        ->with('sp_therapist', $sp_therapist);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'lastname' => 'required',
            'date_of_birth' => 'required',
            'telephone' => 'required',
        ],[
            'name.required' => 'Ime klijenta je obavezno polje',
            'lastname.required' => 'Prezime klijenta je obavezno polje ',
            'date_of_birth.required' => 'Datum rođenja je obavezno polje',
            'telephone.required' => 'Telefon je obavezno polje',


        ]);

            $client = new Client;
            $client->name = $request->input('name');
            $client->lastname = $request->input('lastname');
            $client->date_of_birth = $request->input('date_of_birth');
            $client->email = $request->input('email');
            $client->telephone = $request->input('telephone');
            $client->in_therapy = $request->input('in_therapy');
            $client->diagnosis = $request->input('diagnosis');
            $client->comments = $request->input('comments');
            $client->therapists_id = $request->input('user_id');
            $client->save();

            return redirect('/clients')->with('success', 'Klijent je unesen');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $client = Client::find($id);
        $url = $client->id;

        $sp_therapist = DB::table('users')
        ->join('clients','users.id','=','clients.therapists_id')
        ->where('clients.therapists_id','=',Auth::user()->id)
        ->select('users.name')
        ->get();

        return view('clients.show')
        ->with('client', $client)
        ->with('sp_therapist', $sp_therapist);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sp_therapist = DB::table('users')->pluck('name', 'id');
        $client = Client::find($id);
        return view('clients.edit')->with('client',$client)->with('sp_therapist', $sp_therapist);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'lastname' => 'required',
            'date_of_birth' => 'required',
            'telephone' => 'required'
        ],[
                'name' => 'Ime klijenta je obavezno polje',
                'lastname' => 'Prezime klijenta je obavezno polje ',
                'date_of_birth' => 'Datum rođenja je obavezno polje',
                'telephone' => 'Telefon je obavezno polje',


            ]);

            $client = Client::find($id);
            $client->name = $request->input('name');
            $client->lastname = $request->input('lastname');
            $client->date_of_birth = $request->input('date_of_birth');
            $client->email = $request->input('email');
            $client->telephone = $request->input('telephone');
            $client->in_therapy = $request->input('in_therapy');
            $client->diagnosis = $request->input('diagnosis');
            $client->comments = $request->input('comments');
            $client->therapists_id = $request->input('therapists_id');
            $client->save();

            return redirect('/clients')->with('success', 'Podaci su ažurirani');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect('/clients')->with('error', 'Klijent je izbrisan');
    }
}
