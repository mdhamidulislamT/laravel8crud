@extends('layouts.navbar')

@section('content')


<div class="container mt-lg-3">
    <div class="row col-lg-6 offset-2">   
        <h4>Login form</h4>
        <form method="post" action="{{ route('login') }}">
            @csrf
          <div class="form-group">
            <label>Email Address</label>
            <input type="text" name="email" class="form-control p_input" autofocus >
          </div>
          <div class="form-group mt-md-1">
            <label>Password *</label>
            <input type="password" name="password" class="form-control p_input">
          </div>
        
          <div class="mt-lg-3">
            <button type="submit" class="btn btn-lg btn-primary ">Login</button>
            <span class="ms-5">Don't have an Account?<a href="{{ route('register') }}"> Sign Up</a></span>
          </div>
        
       
        </form>
         
    </div>
</div>


@endsection