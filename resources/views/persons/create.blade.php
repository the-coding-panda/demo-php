@extends('layouts.myapp')

@section('title', 'Create Person')

@section('content')
    <form method="POST" action="{{route("persons.store")}}" >
        @csrf
        <div class="form-group">
            <label>Forename: </label>
            <input type="text" name="firstName" value="{{old('firstName')}}"/>
        </div>
        <div class="form-group">
        <label>Surname: </label>
        <input type="text" name="surname" value="{{old('surname')}}" />
        </div>
        <div class="form-group">
        <label>Address: </label>
        <input type="text" name="address" value="{{old('address')}}" />
        </div>
        <div class="form-group">
            <label>Postcode: </label>
        <input type="text" name="postcode" value="{{old('postcode')}}"/>
        </div>
        <div class="form-group">
            <label>Favourite Colour: </label>
            <input type="text" name="favouriteColour" value="{{old('favouriteColour')}}"/>
        </div>
        <input type="submit" class="btn btn-primary" value="Submit" />
        <a href="{{route('persons.index')}}">Cancel</a>

    </form>

@endsection
