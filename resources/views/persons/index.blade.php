@extends('layouts.myapp')

@section('title', 'Persons')

@section('content')
    <p>Persons in the system:</p>
    <ul class="list-group">
        @foreach($persons as $person)
            <li class="list-group-item">
                <a href="{{route('persons.show', ['id'=>$person->id])}}">{{$person->firstName}} {{$person->surname}}</a>
            </li>
        @endforeach
    </ul>

@endsection
