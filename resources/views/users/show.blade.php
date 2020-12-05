@extends('layouts.app')

@section('content')
  <div>
    <h3 class="mt-3">User detail</h3>
    <ul class="list-unstyled">
        <li>Username: {{ $user->name}} </li>
        <li>Email: {{ $user->email}} </li>
        <li>Password: {{ $user->password}} </li>
        <li><a href="https://hr.wikipedia.org/w/index.php?search={{ $user->name }}">Wikipedia link</a></li>
    </ul>
    <a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>
  </div>  
@endsection