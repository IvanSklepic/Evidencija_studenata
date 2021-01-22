@extends('layouts.app')

@section('content')
    <a href="{{ route('users.create') }}" class="btn btn-primary mt-5">Add</a>
    <table class="table table-striped mt-3">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Name / Email</th>
        <th scope="col">Country</th>
        <th scope="col">Role</th>
        <th> Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users->items() as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}<br />{{ $user->email }}</td> 
                <td>{{ $user->country->name ?? '' }}</td> 
                <td>{{ $user->role->name }}</td>
                <td>
                   <a class="btn btn-outline-primary" href="{{ route('users.show', ['user' => $user->id]) }}">Details</a>
                   <a class="btn btn-outline-primary" href="{{ route('users.edit', ['user' => $user->id]) }}">Edit</a>
                   <a class="btn btn-outline-primary" href="{{ route('change_password.edit', ['user' => $user->id]) }}">Change password</a>
                </td>
            <tr>
        @endforeach
    </tbody>
    </table>    
@endsection