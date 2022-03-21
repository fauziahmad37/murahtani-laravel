@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-signin">
      <form class="col-lg-12 mb-3">
        <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
    
        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
    
        
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
      </form>
      
      
    </main>
    <small class="d-block text-center">Not Registered? <a href="/register">Register Now!</a></small>
  </div>
</div>

@endsection