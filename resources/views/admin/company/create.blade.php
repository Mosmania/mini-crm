@extends('layouts.app')


@section('content')

    <h1>Nieuw bedrijf</h1>

    <div>
        {!! Form::open(['method'=>'POST', 'action'=>'CompanyController@store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Bedrijfsnaam:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('website', 'Website:') !!}
                {!! Form::text('website', null, ['class'=>'form-control']) !!}
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

