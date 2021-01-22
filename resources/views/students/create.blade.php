@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('students.store') }}" method="POST">

        
        @csrf

        
        <div class="form-group">
            <label for="first-name">First name</label>
            <input value="{{ @old('first_name') }}" name="first_name" type="text" class="form-control" id="first-name">
            @if ($errors->has('first_name'))
                <span class="text-danger">{{ $errors->first('first_name') }}</span>
            @endif
        </div>

        
        <div class="form-group">
            <label for="last-name">Last name</label>
            <input value="{{ @old('last_name') }}" name="last_name" type="text" class="form-control" id="last-name">
            @if ($errors->has('last_name'))
                <span class="text-danger">{{ $errors->first('last_name') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="birth-date">Birth date</label>
            <input value="{{ @old('birth_date') }}" name="birth_date" type="date" class="form-control" id="birth-date">
            @if ($errors->has('birth_date'))
                <span class="text-danger">{{ $errors->first('birht_date') }}</span>
            @endif
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input value="{{ @old('email') }}" name="email" type="text" class="form-control" id="email">
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="phone-number">Phone number</label>
            <input value="{{ @old('phone_number') }}" name="phone_number" type="text" class="form-control" id="phone-number">
            @if ($errors->has('phone_number'))
                <span class="text-danger">{{ $errors->first('phone_number') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="citizenship">Citizenship</label>
            <input value="{{ @old('citizenship') }}" name="citizenship" type="text" class="form-control" id="citizenship">
            @if ($errors->has('citizenship'))
                <span class="text-danger">{{ $errors->first('citizenship') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="nationality">Nationality</label>
            <input value="{{ @old('nationality') }}" name="nationality" type="text" class="form-control" id="nationality">
            @if ($errors->has('nationality'))
                <span class="text-danger">{{ $errors->first('nationality') }}</span>
            @endif
        </div>

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('students.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection