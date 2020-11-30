@extends('layouts.app')

@section('content')
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Teacher name</th>
        <th scope="col">Birth date</th>
        <th scope="col">Phone number</th>
        <th scope="col">Email</th>
        <th scope="col">Title</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($teachers->items() as $teacher)
            <tr>
                <td>{{ $teacher->id }}</td>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->birth_date }}</td>
                <td>{{ $teacher->phone_number }}</td>
                <td>{{ $teacher->email }}</td>
                <td>{{ $teacher->title }}</td>
            <tr>
        @endforeach
    </tbody>
    </table>    
@endsection