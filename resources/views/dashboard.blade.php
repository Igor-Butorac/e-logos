@extends('layouts.app')
@section('content')
<?php
use App\Models\User;
use App\Models\Client;
?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Nadzorna ploča') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/clients/create" class="btn btn-primary">Unesi novog klijenta</a>
                    <br/>
                    <br/>
                    <h5> Vaši klijenti </h5>
                    @if(count($clients) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Ime i prezime</th>
                                <th>U terapiji?</th>
                                <th></th>
                            </tr>

                        @foreach($clients as $client)
                            <tr>
                                <th><a href="{{url('clients')}}/{{$client->id}}">{{$client->name}} {{$client->lastname}}</a></th>
                                <th>{{$client->in_therapy}}</th>

                                {{--<th><a href="/clients/{{$client->id}}/edit" class="btn btn-default">Uredi</a></th>--}}
                                <th></th>
                            </tr>
                        @endforeach
                        </table>
                    @else
                    <p>Nemate još klijenata</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
