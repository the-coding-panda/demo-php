@extends('layouts.myapp')

@section('title', 'Persons')

@section('content')
    <p>Persons in the system:</p>
    <ul>
        @foreach($persons as $person)
            <li>
                <a href="{{route('persons.show', ['id'=>$person->id])}}">{{$person->firstName}} {{$person->surname}}</a>
            </li>
        @endforeach
    </ul>

@endsection
