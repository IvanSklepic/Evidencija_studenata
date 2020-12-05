@extends('layouts.app')

@section('content')
  <div>
    <h3 class="mt-3">College detail</h3>
    <ul class="list-unstyled">
        <li>Name: {{ $college->name}} </li>
        <li>OIB: {{ $college->oib}} </li>
        <li>Address: {{ $college->address}} </li>
        <li>Email: {{ $college->email}} </li>
        <li>Phone number: {{ $college->phone_number}} </li>
        <li><a href="https://hr.wikipedia.org/w/index.php?search={{ $college->name }}">Wikipedia link</a></li>
    </ul>
    <a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>
  </div>  
@endsection