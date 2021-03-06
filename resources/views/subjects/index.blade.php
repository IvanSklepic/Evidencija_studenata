@extends('layouts.app')

@section('content')
    <a href="{{ route('subjects.create') }}" class="btn btn-primary mt-5">Add</a>
    <table class="table table-striped mt-3">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Subject name</th>
        <th scope="col">Information</th>
        <th scope="col">Content</th>
        <th> Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($subjects->items() as $subject)
            <tr>
                <td>{{ $subject->id }}</td>
                <td>{{ $subject->name }}</td>
                <td>{{ $subject->information }}</td>
                <td>{{ $subject->content }}</td>
                <td>
                   <a class="btn btn-outline-primary" href="{{ route('subjects.show', ['subject' => $subject->id]) }}">Details</a>
                   <a class="btn btn-outline-primary" href="{{ route('subjects.edit', ['subject' => $subject->id]) }}">Edit</a>
                </td>
            <tr>
        @endforeach
    </tbody>
    </table>    
@endsection