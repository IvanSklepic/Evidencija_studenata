@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('cities.store') }}" method="POST">

        
        @csrf

        
        <div class="form-group">
            <label for="name">City name</label>
            <input value="{{ @old('name') }}" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        
        <div class="form-group">
            <label for="zip-code">Zip code</label>
            <input value="{{ @old('zip_code') }}" name="zip_code" type="number" class="form-control" id="zip-code">
            @if ($errors->has('zip_code'))
                <span class="text-danger">{{ $errors->first('zip_code') }}</span>
            @endif
        </div>
        
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('cities.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection