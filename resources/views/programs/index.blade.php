@extends('layouts.app')

@section('content')
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Program name</th>
        <th scope="col">Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($programs->items() as $program)
            <tr>
                <td>{{ $program->id }}</td>
                <td>{{ $program->name }}</td>
                <td>{{ $program->description }}</td>
        @endforeach
    </tbody>
    </table>    
@endsection