@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-registration">
      <form method="post" action="/register" class="col-lg-12 mb-3">

        @csrf

        <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
        <div class="form-floating">
            <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="name" value="{{ old('name') }}" required>
            <label for="name">Name</label>

            @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror

        </div>
        <div class="form-floating">
            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" value="{{ old('username') }}" required>
            <label for="username">Username</label>

            @error('username')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror

        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}" required>
          <label for="email">Email address</label>

          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror

        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
          <label for="password">Password</label>

          @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror

        </div>
        
        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit" name="login">Login</button>
      </form>
      
      
    </main>
    <small class="d-block text-center">Already Registered? <a href="/login">Login</a></small>
  </div>
</div>

@endsection