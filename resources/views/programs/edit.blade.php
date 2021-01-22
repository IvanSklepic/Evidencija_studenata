@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">
    
    <form action="{{ route('programs.update', ['program' => $program->id]) }}" method="POST">

        
        @csrf
        @method('PUT')

        
        <div class="form-group">
            <label for="name">Name</label>
            <input value="{{ $program->name }}" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

       
        <div class="form-group">
            <label for="description">Description</label>
            <input value="{{ $program->description }}" name="description" type="text" class="form-control" id="description">
            @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
            @endif
        </div>

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('programs.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection