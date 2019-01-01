@extends('layouts.app')


@section('content')

    <h1>Nieuwe medewerker</h1>

    <div>
        {!! Form::open(['method'=>'POST', 'action'=>'EmployeeController@store']) !!}
            <div class="form-group">
                {!! Form::label('first_name', 'Voornaam:') !!}
                {!! Form::text('first_name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('last_name', 'Achternaam:') !!}
                {!! Form::text('last_name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('company_id', 'Bedrijf') !!}
                {!! Form::select('company_id', [''=>'Kies bedrijf'] + $companies, null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('telephone', 'Telefoon:') !!}
                {!! Form::text('telephone', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Opslaan', ['class'=>'btn btn-primary' ]) !!}
            </div>
        {!! Form::close() !!}
    </div>

    <div>
        @include('includes.form_error')
    </div>

@endsection

