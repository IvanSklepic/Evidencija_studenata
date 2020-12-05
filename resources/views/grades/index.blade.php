@extends('layouts.app')

@section('content')
    <a href="{{ route('grades.create') }}" class="btn btn-primary mt-5">Add</a>  
    <table class="table table-striped mt-3">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Grade</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($grades->items() as $grade)
            <tr>
                <td>{{ $grade->id }}</td>
                <td>{{ $grade->grade }}</td>
                <td>
                   <a class="btn btn-outline-primary" href="{{ route('grades.show', ['grade' => $grade->id]) }}">Details</a>
                   <a class="btn btn-outline-primary" href="{{ route('grades.edit', ['grade' => $grade->id]) }}">Edit</a>
                </td>
            <tr>
        @endforeach
    </tbody>
    </table>    
@endsection