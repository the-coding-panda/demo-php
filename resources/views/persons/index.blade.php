@extends('layouts.myapp')

@section('title', 'Persons')

@section('content')
    <a href="{{route('persons.create')}}" class="btn btn-primary">Create Person</a>
    <p>Persons in the system:</p>
    <ul class="list-group">
        @foreach($persons as $person)
            <li class="list-group-item">
                <a href="{{route('persons.show', ['person'=>$person])}}">{{$person->firstName}} {{$person->surname}}</a>
            </li>
        @endforeach
    </ul>

@endsection
