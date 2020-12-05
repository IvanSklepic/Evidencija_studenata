@extends('layouts.app')

@section('content')
  <div>
    <h3 class="mt-3">City detail</h3>
    <ul class="list-unstyled">
        <li>Name: {{ $city->name}} </li>
        <li>Zip code: {{ $city->zip_code}} </li>
        <li><a href="https://hr.wikipedia.org/w/index.php?search={{ $city->name }}">Wikipedia link</a></li>
    </ul>
    <a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>
  </div>  
@endsection