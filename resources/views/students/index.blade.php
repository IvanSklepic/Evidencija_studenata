@extends('layouts.app')

@section('content')
    <a href="{{ route('students.create') }}" class="btn btn-primary mt-5">Add</a>
    <table class="table table-striped mt-3">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">First name</th>
        <th scope="col">Last name</th>
        <th scope="col">Birth date</th>
        <th scope="col">Email</th>
        <th scope="col">Phone number</th>
        <th scope="col">Citizenship</th>
        <th scope="col">Nationality</th>
        <th> Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students->items() as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->first_name }}</td>
                <td>{{ $student->last_name }}</td>
                <td>{{ $student->birth_date }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone_number }}</td>
                <td>{{ $student->citizenship }}</td>
                <td>{{ $student->nationality }}</td>
                <td>
                   <a class="btn btn-outline-primary" href="{{ route('students.show', ['student' => $student->id]) }}">Details</a>
                   <a class="btn btn-outline-primary" href="{{ route('students.edit', ['student' => $student->id]) }}">Edit</a>
                </td>
        @endforeach
    </tbody>
    </table>    
@endsection