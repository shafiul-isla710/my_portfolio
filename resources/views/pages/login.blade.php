@extends('layout.app')


@section('content')

  <div class="container d-flex justify-content-center align-items-center" style="height: 650px; ">
        <div class="card shadow p-4" style="width: 380px;">
            <h4 class="text-center mb-3">Admin Login</h4>
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <!-- Email -->
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email" value='{{ old('email') }}' >
                    @error('email')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" value='{{ old('password') }}'>
                    @error('password')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Button -->
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
        </div>
    </div>

@endsection