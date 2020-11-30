@extends('layouts.app')

@section('content')
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users->items() as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
            <tr>
        @endforeach
    </tbody>
    </table>    
@endsection