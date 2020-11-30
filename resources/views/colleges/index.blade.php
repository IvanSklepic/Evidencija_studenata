@extends('layouts.app')

@section('content')
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">College name</th>
        <th scope="col">OIB</th>
        <th scope="col">Address</th>
        <th scope="col">Email</th>
        <th scope="col">Phone number</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($colleges->items() as $college)
            <tr>
                <td>{{ $college->id }}</td>
                <td>{{ $college->name }}</td>
                <td>{{ $college->oib }}</td>
                <td>{{ $college->address }}</td>
                <td>{{ $college->email }}</td>
                <td>{{ $college->phone_number }}</td>
            <tr>
        @endforeach
    </tbody>
    </table>    
@endsection