@extends('layouts.app')


@section('content')

    <h1>Wijzig bedrijf</h1>

    <div>
        {!! Form::model($company, ['method'=>'PATCH', 'action'=>['CompanyController@update', $company->id]]) !!}
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

        {!! Form::open(['method'=>'DELETE', 'action'=>['CompanyController@destroy', $company->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Verwijder', ['class'=>'btn btn-danger' ]) !!}
        </div>
        {!! Form::close() !!}

    </div>

    <div>
        @include('includes.form_error')
    </div>

@endsection

