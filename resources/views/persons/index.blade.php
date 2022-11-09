@extends('layouts.myapp')

@section('title', 'Persons')

@section('content')
    <a href="{{route('persons.create')}}" class="btn btn-primary">Create Person</a>
    <p>Persons in the system:</p>
    <table id="user-table" class="table table-striped" style="width:100%">
        <thead>
        <tr>
            <th>Name</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($persons as $person)
            <tr>
                <td>{{ $person->firstName }} {{ $person->surname }}</td>
                <td><a href="{{route('persons.show', ['person'=>$person])}}">More info</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @push('scripts')
        <script>
            $(document).ready( function () {
                $('#user-table').DataTable();
            } );
        </script>
    @endpush

@endsection

