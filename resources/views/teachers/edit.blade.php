@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">
    
    <form action="{{ route('teachers.update', ['teacher' => $teacher->id]) }}" method="POST">

        
        @csrf
        @method('PUT')

        
        <div class="form-group">
            <label for="first_name">First name</label>
            <input value="{{ $teacher->first_name }}" name="first_name" type="text" class="form-control" id="first-name">
            @if ($errors->has('first_name'))
                <span class="text-danger">{{ $errors->first('first_name') }}</span>
            @endif
        </div>

       
        <div class="form-group">
            <label for="last_name">Last name</label>
            <input value="{{ $teacher->last_name }}" name="last_name" type="text" class="form-control" id="last-name">
            @if ($errors->has('last_name'))
                <span class="text-danger">{{ $errors->first('last_name') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="birht_date">Birth date</label>
            <input value="{{ $teacher->birht_date }}" name="birht_date" type="date" class="form-control" id="birht-date">
            @if ($errors->has('birht_date'))
                <span class="text-danger">{{ $errors->first('birht_date') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="phone_number">Phone number</label>
            <input value="{{ $teacher->phone_number }}" name="phone_number" type="text" class="form-control" id="phone-number">
            @if ($errors->has('phone_number'))
                <span class="text-danger">{{ $errors->first('phone_number') }}</span>
            @endif
        </div> 
        
        <div class="form-group">
            <label for="email">Email</label>
            <input value="{{ $teacher->email }}" name="email" type="text" class="form-control" id="email">
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="title">Title</label>
            <input value="{{ $teacher->title }}" name="title" type="text" class="form-control" id="title">
            @if ($errors->has('title'))
                <span class="text-danger">{{ $errors->first('title') }}</span>
            @endif
        </div>

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('teachers.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection