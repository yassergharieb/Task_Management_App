@extends('app')
@section('content')
    <form class="p-4" method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ old('email') }}"
                aria-describedby="emailHelp">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">{{ __('Email Password Reset Link') }}</button>

    </form>
@endsection
