@extends('layouts.app')

@section('content')
<a href="{{ route('colleges.create') }}" class="btn btn-primary mt-5">Add</a>
    <table class="table table-striped mt-3">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">College name</th>
        <th scope="col">OIB</th>
        <th scope="col">Address</th>
        <th scope="col">Email</th>
        <th scope="col">Phone number</th>
        <th> Actions</th>
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
                <td>
                   <a class="btn btn-outline-primary" href="{{ route('colleges.show', ['college' => $college->id]) }}">Details</a>
                   <a class="btn btn-outline-primary" href="{{ route('colleges.edit', ['college' => $college->id]) }}">Edit</a>
                </td>
            <tr>
        @endforeach
    </tbody>
    </table>    
@endsection