@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

    <a href="{{url('clients')}}" class="btn btn-primary">Natrag</a><br/><br/>
    <h1>Podaci o klijentu </h1>
        <p><strong> Ime i prezime klijenta:</strong>
        {{$client->name}} {{$client->lastname}}</p>
        <p><strong> Datum rođenja:</strong> {{$client->date_of_birth}}</p>
        <p><strong> Email roditelja:</strong> {{$client->email}}</p>
        <p><strong> Tel. roditelja:</strong> {{$client->telephone}}</p>
        <p><strong> U terapiji:</strong> {{$client->in_therapy}}</p>
        <p><strong> Dijagnoza:</strong> {{$client->diagnosis}}</p>
        <p><strong> Komentari:</strong> {{$client->comments}}</p>
        @foreach($sp_therapist as $therapist)
        <p><strong> Kod logopeda:</strong> {{$therapist->name}}</p>
        @break
        @endforeach
<hr>
    <a href="/clients/{{$client->id}}/edit" class="btn btn-info">Uredi</a>

    {!!Form::open(['action' =>['ClientsController@destroy', $client->id], 'method' => 'POST', 'class'=>'float-right'])!!}

    @if(Auth::user()->type_of_user == 1)

    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Izbriši', ['class'=>'btn btn-danger'])}}
    @endif
    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
