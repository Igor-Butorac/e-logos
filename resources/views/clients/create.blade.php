@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

    <a style="" class="btn btn-primary" href={{ URL::previous() }}>Natrag</a><br/><br/>
    <h2> Unesite novog klijenta </h2>

    {!! Form::open(['action' => 'ClientsController@store', 'method' => 'POST','enctype'=>'multipart/data']) !!}
        @csrf

            <div class="form-group">

                    {{Form::label('name', 'Ime')}}
                    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Unesite ime djeteta'])}}
            </div>

            <div class="form-group">
                    {{Form::label('lastname', 'Prezime')}}
                    {{Form::text('lastname', '', ['class' => 'form-control', 'placeholder' => 'Unesite prezime djeteta'])}}
            </div>

            <div class="form-group">
                {{Form::label('date_of_birth', 'Datum rođenja')}}
                {{Form::date('date_of_birth', '', ['class' => 'form-control', 'placeholder' => 'Unesite datum rođenja djeteta'])}}
            </div>

            <div class="form-group">
                {{Form::label('email', 'Email roditelja')}}
                {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Unesite email roditelja'])}}
            </div>

            <div class="form-group">
                {{Form::label('telephone', 'Kontakt broj roditelja:')}}
                {{Form::text('telephone', '', ['class' => 'form-control', 'placeholder' => 'Unesite kontakt broj'])}}
            </div>

            <div class="form-group">
                {{Form::label('in_therapy', 'U terapiji?')}}<br/>
                {{Form::checkbox('in_therapy', 'DA')}} Da<br/>
                {{Form::checkbox('in_therapy', 'NE')}} Ne<br/>
            </div>

            <div class="form-group">
                {{Form::label('diagnosis', 'Dijagnoza?')}}<br/>
                {{Form::textarea('diagnosis', '', ['class' => 'form-control', 'rows' => 5, 'cols' => 170, 'placeholder' => 'Unesite dijagnozu'])}}
            </div>

            <div class="form-group">
                {{Form::label('comments', 'Komentari')}}<br/>
                {{Form::textarea('comments', '', ['class' => 'form-control', 'rows' => 5, 'cols' => 170, 'placeholder' => 'Unesite popratne komentare'])}}
            </div>

            <div class="form-group">
                {{Form::label('user_id', 'Logoped')}}<br/>
                {{Form::select('user_id', $sp_therapist, null, ['class' => 'form-control','placeholder' => 'Izaberite logopeda'])}}
            </div>


            {{Form::submit('Unesi',['class' => 'btn btn-success'])}}
            <br/>    <br/>    <br/>

            {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
