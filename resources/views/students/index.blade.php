@extends('layouts.app')

@section('content')
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Student name</th>
        <th scope="col">Birth date</th>
        <th scope="col">Email</th>
        <th scope="col">Phone number</th>
        <th scope="col">Citizenship</th>
        <th scope="col">Nationality</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students->items() as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->birth_date }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone_number }}</td>
                <td>{{ $student->citizenship }}</td>
                <td>{{ $student->nationality }}</td>
        @endforeach
    </tbody>
    </table>    
@endsection