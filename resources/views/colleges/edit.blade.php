@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">
    
    <form action="{{ route('colleges.update', ['college' => $college->id]) }}" method="POST">

        
        @csrf
        @method('PUT')

        
        <div class="form-group">
            <label for="name">Name</label>
            <input value="{{ $college->name }}" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

       
        <div class="form-group">
            <label for="oib">OIB</label>
            <input value="{{ $college->obi }}" name="oib" type="text" class="form-control" id="oib">
            @if ($errors->has('oib'))
                <span class="text-danger">{{ $errors->first('oib') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input value="{{ $college->address }}" name="address" type="text" class="form-control" id="address">
            @if ($errors->has('address'))
                <span class="text-danger">{{ $errors->first('address') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input value="{{ $college->email }}" name="email" type="text" class="form-control" id="email">
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="phone_number">Phone number</label>
            <input value="{{ $college->phone_number }}" name="phone_number" type="text" class="form-control" id="phone-number">
            @if ($errors->has('phone_number'))
                <span class="text-danger">{{ $errors->first('phone_number') }}</span>
            @endif
        </div>

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('colleges.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection