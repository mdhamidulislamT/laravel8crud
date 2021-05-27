@extends('admin.home')

@section('Admin-Content')
   
<div class="container">
    <div class="row col-lg-8 offset-1 mt-lg-4">
        <h4>Create New Admin </h4>
        <form method="post" action="{{ route('addNewCourse') }}" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label> Email Address </label>
            <input type="email" name="CourseTitle" class="form-control p_input">
          </div>
          <div class="form-group">
            <label> Admin Role </label>
            <select class="form-select" aria-label="Default select example">
              <option> select admin role</option>
              <option value="1">1</option>
              <option value="2">2</option>
            </select>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="TotalHour" class="form-control p_input">
          </div>
          <div class="form-group">
            <label>Confirm Password</label>
            <input type="text" name="TotalClass" class="form-control p_input">
          </div>
         
          
          <div class=" mt-lg-2">
            <button type="submit" class="btn btn-primary btn-block enter-btn">Register</button>
          </div>
          
          </form>
    </div>
</div>
@endsection