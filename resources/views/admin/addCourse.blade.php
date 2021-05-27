@extends('admin.home')

@section('Admin-Content')
   
<div class="container">
    <div class="row col-lg-8 offset-1 mt-lg-2">
        <h4>Create New Course Informatio</h4>
        <form method="post" action="{{ route('addNewCourse') }}" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label>Course Title</label>
            <input type="text" name="CourseTitle" class="form-control p_input">
          </div>
          <div class="form-group">
            <label>Total Hour</label>
            <input type="text" name="TotalHour" class="form-control p_input">
          </div>
          <div class="form-group">
            <label>Total Classe(s)</label>
            <input type="text" name="TotalClass" class="form-control p_input">
          </div>
          <div class="form-group">
            <label>Course Fee</label>
            <input type="number" name="CourseFee" class="form-control p_input">
          </div>
          <div class="form-group">
            <label>Course Image</label>
            <input type="file" name="CourseImage" class="form-control p_input">
          </div>
          
          <div class=" mt-lg-2">
            <button type="submit" class="btn btn-primary btn-block enter-btn">Register</button>
          </div>
          
          </form>
    </div>
</div>
@endsection