@extends('layouts.myapp')

@section('title', 'Person Details')

@section('content')
    <ul>
        <li>Name: {{$person->firstName}} {{$person->surname}}</li>
        <li>Address: {{$person->address}}</li>
        <li>Postcode: {{$person->postcode}}</li>
        <li>Favourite Colour: {{$person->favouriteColour}}</li>
    </ul>

    <form method="POST" action="{{route('persons.destroy', ['person'=>$person])}}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

@endsection
