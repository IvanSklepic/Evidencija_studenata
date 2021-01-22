@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('grades.store') }}" method="POST">

        
        @csrf

        
        <div class="form-group">
            <label for="grade">Grade</label>
            <input value="{{ @old('grade') }}" name="grade" type="number" class="form-control" id="grade">
            @if ($errors->has('grade'))
                <span class="text-danger">{{ $errors->first('grade') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="created_at">Created at</label>
            <input value="{{ @old('created_at') }}" name="created_at" type="date" class="form-control" id="created-at">
            @if ($errors->has('created_at'))
                <span class="text-danger">{{ $errors->first('created_at') }}</span>
            @endif
        </div>

        
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('grades.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection