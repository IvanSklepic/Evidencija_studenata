@extends('layouts.app')

@section('content')
  <div>
    <h3 class="mt-3">Student detail</h3>
    <ul class="list-unstyled">
        <li>First name: {{ $student->first_name}} </li>
        <li>Last name: {{ $student->last_name}} </li>
        <li>Birth date: {{ $student->birth_date}} </li>
        <li>Email: {{ $student->email}} </li>
        <li>Phone number: {{ $student->phone_number}} </li>
        <li>Citizenship: {{ $student->citizenship}} </li>
        <li>Nationality: {{ $student->nationality}} </li>
        <li><a href="https://hr.wikipedia.org/w/index.php?search={{ $student->name }}">Wikipedia link</a></li>
    </ul>
    <a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>
  </div>  
@endsection