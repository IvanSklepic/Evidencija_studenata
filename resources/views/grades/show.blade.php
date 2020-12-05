@extends('layouts.app')

@section('content')
  <div>
    <h3 class="mt-3">Grade detail</h3>
    <ul class="list-unstyled">
        <li>Grade: {{ $grade->grade}} </li>
        <li><a href="https://hr.wikipedia.org/w/index.php?search={{ $grade->id }}">Wikipedia link</a></li>
    </ul>
    <a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>
  </div>  
@endsection