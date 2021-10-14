@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-md-5">
    @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{session('loginError')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <main class="form-signin">
      <h3 class="h3 mb-3 fw-normal">Please Login</h3>
      <form class="mb-2" action="/login" method="POST">  
        @csrf
        <div class="form-floating">
          <input type="email" class="form-control rounded-top @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" required autofocus value="{{old('email')}}">
          <label for="email">Email address</label>
          @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
          @enderror  
        </div>
        <div class="form-floating">
          <input type="password" class="form-control rounded-bottom" id="password" name="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
  
        <button class="w-100 btn btn-lg btn-success" type="submit">Login</button>
      </form>
      <small class="text-muted d-block text-center">Not Registered ? <a href="/register">Register Now</a> </small>
    </main>
  </div>
</div>
  
@endsection



