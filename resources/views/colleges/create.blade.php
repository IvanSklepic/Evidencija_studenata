@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('colleges.store') }}" method="POST">

       
        @csrf

        
        <div class="form-group">
            <label for="name">College name</label>
            <input value="{{ @old('name') }}" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        
        <div class="form-group">
            <label for="oib">OIB</label>
            <input value="{{ @old('oib') }}" name="oib" type="text" class="form-control" id="oib">
            @if ($errors->has('oib'))
                <span class="text-danger">{{ $errors->first('oib') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="adress">Adress</label>
            <input value="{{ @old('adress') }}" name="adress" type="text" class="form-control" id="adress">
            @if ($errors->has('adress'))
                <span class="text-danger">{{ $errors->first('adress') }}</span>
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
        
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('colleges.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection