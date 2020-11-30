@extends('layouts.app')

@section('content')
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">City name</th>
        <th scope="col">Zip code</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cities->items() as $city)
            <tr>
                <td>{{ $city->id }}</td>
                <td>{{ $city->name }}</td>
                <td>{{ $city->zip_code }}</td>
            <tr>
        @endforeach
    </tbody>
    </table>    
@endsection