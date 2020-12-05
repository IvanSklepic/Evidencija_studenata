@extends('layouts.app')

@section('content')
  <div>
    <h3 class="mt-3">Program detail</h3>
    <ul class="list-unstyled">
        <li>Program name: {{ $program->name}} </li>
        <li>Description: {{ $program->description}} </li>
        <li><a href="https://hr.wikipedia.org/w/index.php?search={{ $program->name }}">Wikipedia link</a></li>
    </ul>
    <a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>
  </div>  
@endsection