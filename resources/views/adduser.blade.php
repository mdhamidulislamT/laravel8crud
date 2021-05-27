@extends('layouts.layout')

@section('content')
<div class="row m-5">
    
    <div class="col col-lg-6">
        <div class="mb-1 row">
            @if (session('status'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
        @endif
        </div>
        <form action="adduser" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-1 row">
                <label for="examplformControlInput" class="form-label">  Username</label>
                <div class="col-sm-12">
                    <input type="text" name="username" class="form-control" id="examplformControlInput" >
                </div>
            </div>
            <div class="mb-1 row">
                <label for="examplformControlInput" class="form-label"> Full Name</label>
                <div class="col-sm-12">
                    <input type="text" name="fullname" class="form-control" id="examplformControlInput" >
                </div>
            </div>
            <div class="mb-1 row">
                <label for="examplformControlInput" class="form-label"> Phone No</label>
                <div class="col-sm-12">
                    <input type="number" name="phone" class="form-control" id="examplformControlInput" >
                </div>
            </div>
            <div class="mb-1 row">
                <label for="examplformControlInput" class="form-label"> Email Address</label>
                <div class="col-sm-12">
                    <input type="email" name="email" class="form-control" id="examplformControlInput" >
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-md-6">
                    <label for="country" class="form-label">Gender</label>
                    <select name="gender" class="form-select" id="gender" required>
                        <option value="">Select---</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    </select>
                </div>
                <div class="col-md-6 mt-3">
                    <label for="file">Upload</label>
                    <input type="file" name="file" id="">
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