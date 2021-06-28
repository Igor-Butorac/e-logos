@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

     <a style="" class="btn btn-primary" href={{ URL::previous() }}>Natrag</a><br/><br/>
    <h2> Ažurirajte podatke o klijentu </h2>
    {!! Form::open(['action' => ['ClientsController@update', $client->id], 'method' => 'POST']) !!}

        <div class="form-group">

                {{Form::label('name', 'Ime')}}
                {{Form::text('name', $client->name, ['class' => 'form-control', 'placeholder' => 'Unesite ime djeteta'])}}
        </div>

        <div class="form-group">
                {{Form::label('lastname', 'Prezime')}}
                {{Form::text('lastname', $client->lastname, ['class' => 'form-control', 'placeholder' => 'Unesite prezime djeteta'])}}
        </div>

        <div class="form-group">
            {{Form::label('date_of_birth', 'Datum rođenja')}}
            {{Form::date('date_of_birth', $client->date_of_birth, ['class' => 'form-control', 'placeholder' => 'Unesite datum rođenja djeteta'])}}
        </div>

        <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', $client->email, ['class' => 'form-control', 'placeholder' => 'Unesite email roditelja'])}}
        </div>

        <div class="form-group">
            {{Form::label('telephone', 'Kontakt broj:')}}
            {{Form::text('telephone', $client->telephone, ['class' => 'form-control', 'placeholder' => 'Unesite kontakt broj'])}}
        </div>

        <div class="form-group">

            @if($client->in_therapy != 1)

            <div class="form-group">
                    {{Form::label('in_therapy', 'U terapiji')}}<br>

                @if($client->in_therapy == "Da")
                    {{Form::checkbox('in_therapy', 'Da',$client->in_therapy)}} Da <br>
                    {{Form::checkbox('in_therapy', 'Ne','')}} Ne<br>


                @elseif($client->in_therapy == "Ne")
                    {{Form::checkbox('in_therapy', 'Da',)}} Da<br>
                    {{Form::checkbox('in_therapy', 'Ne',$client->in_therapy)}} Ne <br>
                @endif
            </div>
        </div>

        @else

        <div class="form-group">
            {{Form::label('in_therapy', 'U terapiji?')}}<br>
            @if($client->in_therapy == "Da")
                {{Form::text('in_therapy',$client->in_therapy,['class'=>'form-control','readonly '])}}  <br>

            @elseif($client->in_therapy == "Ne")
                {{Form::text('in_therapy',$client->in_therapy,['class'=>'form-control','readonly '])}} <br>
        </div>
        @endif

        @endif

        <div class="form-group">
            {{Form::label('diagnosis', 'Dijagnoza?')}}<br/>
            {{Form::textarea('diagnosis', $client->diagnosis, ['class' => 'form-control', 'rows' => 5, 'cols' => 170])}}
        </div>

        <div class="form-group">
            {{Form::label('comments', 'Komentari')}}<br/>
            {{Form::textarea('comments',  $client->comments, ['class' => 'form-control', 'rows' => 5, 'cols' => 170])}}
        </div>

        <div class="form-group">
            {{Form::label('therapists_id', 'Logoped')}}
            {{Form::select('therapists_id', $sp_therapist, $client->therapists_id,['class' => 'form-control'])}}
        </div>


        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Unesi',['class' => 'btn btn-success'])}}
        <br/>    <br/>    <br/>

        {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
