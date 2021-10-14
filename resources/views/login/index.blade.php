@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-md-5">
    @if(session()->has('success'))
      <div class="alert alert-primary alert-dismissible fade show" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <main class="form-signin">
      <h3 class="h3 mb-3 fw-normal">Please Login</h3>
      <form class="mb-2">  
        <div class="form-floating">
          <input type="email" class="form-control rounded-top" id="email" name="email" placeholder="name@example.com">
          <label for="email">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control rounded-bottom" id="password name="password" placeholder="Password">
          <label for="password">Password</label>
        </div>
  
        <button class="w-100 btn btn-lg btn-success" type="submit">Login</button>
      </form>
      <small class="text-muted d-block text-center">Not Registered ? <a href="/register">Register Now</a> </small>
    </main>
  </div>
</div>
  
@endsection



