@extends('layouts.app')


@section('content')

    <h1>Onderhoud bedrijven</h1>

    @include('includes.flash_message')

    @if(count($companies)>0)

        <table class="table">

            <tr>
                <th>Id</th>
                <th>Bedrijfsnaam</th>
                <th>Email</th>
                <th>Website</th>
            </tr>

            @foreach($companies as $company)

                <tr>
                    <td>{{$company->id}}</td>
                    <td><a href="{{route('admin.company.edit', $company->id)}}">{{$company->name}}</td>
                    <td>{{$company->email}}</td>
                    <td>{{$company->website}}</td>
                </tr>

            @endforeach

        </table>
        <div>
            {{$companies->render()}}
        </div>

    @else

        <p>Geen bedrijven</p>

    @endif

    <div>
        {!! Form::open(['method'=>'GET', 'action'=>'CompanyController@create']) !!}
            <div class="form-group">
                {!! Form::submit('Nieuw', ['class'=>'btn btn-primary' ]) !!}
            </div>
        {!! Form::close() !!}
    </div>

@endsection

