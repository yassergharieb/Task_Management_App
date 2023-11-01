@extends('app')
@section('content')
    <form class="p-4" method="POST" action="{{ route('password.store') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ old('email') }}"
                aria-describedby="emailHelp">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password confirmation</label>
            <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-primary"> {{ __('Reset Password') }}</button>

    </form>
@endsection
