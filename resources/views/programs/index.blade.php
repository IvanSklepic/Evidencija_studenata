@extends('layouts.app')

@section('content')
    <a href="{{ route('programs.create') }}" class="btn btn-primary mt-5">Add</a>
    <table class="table table-striped mt-3">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Program name</th>
        <th scope="col">Description</th>
        <th> Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($programs->items() as $program)
            <tr>
                <td>{{ $program->id }}</td>
                <td>{{ $program->name }}</td>
                <td>{{ $program->description }}</td>
                <td>
                   <a class="btn btn-outline-primary" href="{{ route('programs.show', ['program' => $program->id]) }}">Details</a>
                   <a class="btn btn-outline-primary" href="{{ route('programs.edit', ['program' => $program->id]) }}">Edit</a>
                </td>
        @endforeach
    </tbody>
    </table>    
@endsection