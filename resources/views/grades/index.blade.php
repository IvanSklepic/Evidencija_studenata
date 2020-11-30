@extends('layouts.app')

@section('content')
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Grade</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($grades->items() as $grade)
            <tr>
                <td>{{ $grade->id }}</td>
                <td>{{ $grade->grade }}</td>
            <tr>
        @endforeach
    </tbody>
    </table>    
@endsection