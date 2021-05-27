@extends('layouts.layout')

@section('content')
<div class="row m-3">
    
    <div class="col col-lg-6">
        <div class="mb-1 row">
            <h4>Update User Info</h4>
            @if (session('status'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
        @endif
        </div>
        <form action="/edit" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-1 row">
                <div class="col-sm-12">
                    <input type="hidden" name="id" value="{{ $user->id }}" class="form-control" id="examplformControlInput" >
                </div>
                <label for="examplformControlInput" class="form-label">  Username</label>
                <div class="col-sm-12">
                    <input type="text" name="username" value="{{ $user->username }}" class="form-control" id="examplformControlInput" >
                </div>
            </div>
            <div class="mb-1 row">
                <label for="examplformControlInput" class="form-label"> Full Name</label>
                <div class="col-sm-12">
                    <input type="text" name="fullname" value="{{ $user->fullname }}" class="form-control" id="examplformControlInput" >
                </div>
            </div>
            <div class="mb-1 row">
                <label for="examplformControlInput" class="form-label"> Phone No</label>
                <div class="col-sm-12">
                    <input type="text" name="phone" value="{{ $user->phone }}" class="form-control" id="examplformControlInput" >
                </div>
            </div>
            <div class="mb-1 row">
                <label for="examplformControlInput" class="form-label"> Email Address</label>
                <div class="col-sm-12">
                    <input type="email" name="email" value="{{ $user->email }}" class="form-control" id="examplformControlInput" >
                </div>
            </div>

            <div class="row mb-1">
                <div class="col-md-6">
                    <label for="country" class="form-label">Gender</label>
                <select name="gender" class="form-select" id="gender" required>
                    <option value="">Select---</option>
                  <option  value="male" @if($user->gender=='male') selected @endif >Male</option>
                  <option value="female" @if($user->gender=='female') selected @endif >Female</option>
                </select>
                </div>
                <div class="col-md-6 mt-3">
                    <label for="file">Upload</label>
                    <img width="100px" height="60px" class=" rounded " src="{{ URL::asset('avatars/'.$user->image) }}" alt="">

                    <input type="file" name="file">
                </div>
            </div>
              <div class="mt-3 row">
                <div>
                    <button class="btn btn-lg btn-primary">Submit</button>
                </div>
            </div>
        </form> 
    </div>
</div>
@stop