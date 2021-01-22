@extends('layouts.app')

@section('content')
    <a href="{{ route('teachers.create') }}" class="btn btn-primary mt-5">Add</a>
    <table class="table table-striped mt-3">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">First name</th>
        <th scope="col">Last name</th>
        <th scope="col">Birth date</th>
        <th scope="col">Phone number</th>
        <th scope="col">Email</th>
        <th scope="col">Title</th>
        <th> Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($teachers->items() as $teacher)
            <tr>
                <td>{{ $teacher->id }}</td>
                <td>{{ $teacher->first_name }}</td>
                <td>{{ $teacher->last_name }}</td>
                <td>{{ $teacher->birth_date }}</td>
                <td>{{ $teacher->phone_number }}</td>
                <td>{{ $teacher->email }}</td>
                <td>{{ $teacher->title }}</td>
                <td>
                   <a class="btn btn-outline-primary" href="{{ route('teachers.show', ['teacher' => $teacher->id]) }}">Details</a>
                   <a class="btn btn-outline-primary" href="{{ route('teachers.edit', ['teacher' => $teacher->id]) }}">Edit</a>
                </td>
            <tr>
        @endforeach
    </tbody>
    </table>    
@endsection