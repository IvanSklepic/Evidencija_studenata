@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('subjects.store') }}" method="POST">

        
        @csrf

        
        <div class="form-group">
            <label for="name">Subject name</label>
            <input value="{{ @old('name') }}" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        
        <div class="form-group">
            <label for="information">Information</label>
            <input value="{{ @old('information') }}" name="information" type="text" class="form-control" id="information">
            @if ($errors->has('information'))
                <span class="text-danger">{{ $errors->first('information') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <input value="{{ @old('content') }}" name="content" type="text" class="form-control" id="content">
            @if ($errors->has('content'))
                <span class="text-danger">{{ $errors->first('content') }}</span>
            @endif
        </div>
        
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('subjects.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection