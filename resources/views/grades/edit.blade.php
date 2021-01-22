@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">
    
    <form action="{{ route('grades.update', ['grade' => $grade->id]) }}" method="POST">

        
        @csrf
        @method('PUT')

        
        <div class="form-group">
            <label for="grade">Grade</label>
            <input value="{{ $grade->grade }}" name="grade" type="text" class="form-control" id="grade">
            @if ($errors->has('grade'))
                <span class="text-danger">{{ $errors->first('grade') }}</span>
            @endif
        </div>

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('grades.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection