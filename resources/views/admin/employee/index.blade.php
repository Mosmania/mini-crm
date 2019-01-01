@extends('layouts.app')


@section('content')

    <h1>Onderhoud medewerkers</h1>

    @include('includes.flash_message')

    @if(count($employees)>0)

        <table class="table">

            <tr>
                <th>Id</th>
                <th>Voornaam</th>
                <th>Achternaam</th>
                <th>Bedrijfsnaam</th>
                <th>Email</th>
                <th>Telefoon</th>
            </tr>

            @foreach($employees as $employee)

                <tr>
                    <td>{{$employee->id}}</td>
                    <td>{{$employee->first_name}}</td>
                    <td><a href="{{route('admin.employee.edit', $employee->id)}}">{{$employee->last_name}}</td>
                    <td>{{$employee->company ? $employee->company->name : "************"}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->telephone}}</td>
                </tr>

            @endforeach

        </table>
        <div>
            {{$employees->render()}}
        </div>
    @else

        <p>Geen medewerkers</p>

    @endif
    <div>
        {!! Form::open(['method'=>'GET', 'action'=>'EmployeeController@create']) !!}
        <div class="form-group">
            {!! Form::submit('Nieuw', ['class'=>'btn btn-primary' ]) !!}
        </div>
        {!! Form::close() !!}
    </div>

@endsection

