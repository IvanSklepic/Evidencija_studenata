@extends('layouts.app')

@section('content')
  <div>
    <h3 class="mt-3">Teacher detail</h3>
    <ul class="list-unstyled">
        <li>Teacher name: {{ $teacher->first_name}} </li>
        <li>Teacher name: {{ $teacher->last_name}} </li>
        <li>Birth date: {{ $teacher->birth_date}} </li>
        <li>Phone number: {{ $teacher->phone_number}} </li>
        <li>Email: {{ $teacher->email}} </li>
        <li>Title: {{ $teacher->title}} </li>
        <li><a href="https://hr.wikipedia.org/w/index.php?search={{ $teacher->name }}">Wikipedia link</a></li>
    </ul>
    <a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>
  </div>  
@endsection