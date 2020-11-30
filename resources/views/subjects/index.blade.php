@extends('layouts.app')

@section('content')
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Subject name</th>
        <th scope="col">Information</th>
        <th scope="col">Content</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($subjects->items() as $subject)
            <tr>
                <td>{{ $subject->id }}</td>
                <td>{{ $subject->name }}</td>
                <td>{{ $subject->information }}</td>
                <td>{{ $subject->content }}</td>
            <tr>
        @endforeach
    </tbody>
    </table>    
@endsection