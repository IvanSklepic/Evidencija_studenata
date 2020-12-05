@extends('layouts.app')

@section('content')
  <div>
    <h3 class="mt-3">Subject detail</h3>
    <ul class="list-unstyled">
        <li>Subject name: {{ $subject->name}} </li>
        <li>Information: {{ $subject->name}} </li>
        <li>Content: {{ $subject->name}} </li>
        <li><a href="https://hr.wikipedia.org/w/index.php?search={{ $subject->name }}">Wikipedia link</a></li>
    </ul>
    <a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>
  </div>  
@endsection