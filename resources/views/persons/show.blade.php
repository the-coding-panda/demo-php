@extends('layouts.myapp')

@section('title', 'Person Details')

@section('content')
    <ul>
        <li>Name: {{$person->firstName}} {{$person->surname}}</li>
        <li>Address: {{$person->address}}</li>
        <li>Postcode: {{$person->postcode}}</li>
    </ul>

@endsection
