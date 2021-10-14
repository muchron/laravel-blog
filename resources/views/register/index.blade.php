@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-md-5">
    <main class="form-registration">
      <form action="/register" method="POST" class="mb-2">  
        @csrf
        <div class="form-floating">
          <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" name="name" placeholder="Fullname" required value="{{old('name')}}">
          <label for="name">Fullname</label>
          @error('name')
            <div id="name" class="invalid-feedback">
                {{$message}}
            </div>
          @enderror          
        </div>
        <div class="form-floating">
          <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Username" required value="{{old('username')}}">
          <label for="username">Username</label>
            @error('username')
                <div id="username" class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror     
        </div>
        <div class="form-floating">
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email Address" required value="{{old('email')}}">
          <label for="email">Email address</label>
            @error('email')
                <div id="email" class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror  
        </div>
        <div class="form-floating">
          <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
          <label for="password">Password</label>
            @error('password')
                <div id="password" class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror  
        </div>

        <button class="w-100 btn btn-lg btn-success" type="submit">Register</button>
      </form>
      <small class="text-muted d-block text-center">Have an account ? <a href="/login">Login here</a> </small>
    </main>
  </div>
</div>
  
@endsection



