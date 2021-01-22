@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">
    
    <form action="{{ route('subjects.update', ['subject' => $subject->id]) }}" method="POST">

        
        @csrf
        @method('PUT')

        
        <div class="form-group">
            <label for="name">Name</label>
            <input value="{{ $subject->name }}" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

       
        <div class="form-group">
            <label for="information">Information</label>
            <input value="{{ $subject->information }}" name="information" type="text" class="form-control" id="information">
            @if ($errors->has('information'))
                <span class="text-danger">{{ $errors->first('information') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <input value="{{ $subject->content }}" name="content" type="text" class="form-control" id="content">
            @if ($errors->has('content'))
                <span class="text-danger">{{ $errors->first('content') }}</span>
            @endif
        </div>

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('subjects.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection