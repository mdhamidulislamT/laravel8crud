@extends('layouts.navbar')

@section('content')

<div class="container mt-3">
    <button class="btn btn-md btn-info"><a class="text-dark" href="{{ url('admin/dashboard') }}">&#8592;Dashboard</a></button>
    <span>Course information</span>
    <button class="btn btn-md btn-info float-end"><a class="text-dark" href="{{ url('admin/addCourseForm') }}">Create New Coures</a> </button>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">s. no</th>
            <th scope="col">Course ID</th>
            <th scope="col">Course Title</th>
            <th scope="col">Total Classes</th>
            <th scope="col">Total Hour(s)</th>
            <th scope="col">Fee</th>
            <th scope="col">actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->course_title }}</td>
                    <td>{{ $course->total_class }}</td>
                    <td>{{ $course->total_hour }}</td>
                    <td>{{ $course->fee }}</td>
                    <td>
                        <button  class="btn btn-info btn-sm">show</button>|
                        <button class="btn btn-info btn-sm">Edit</button>|
                        <button class="btn btn-info btn-sm">Off</button>
                        <button class="btn btn-info btn-sm">Add Class</button>
                    </td>
                </tr>
          @endforeach
        </tbody>
      </table>
</div>
    
@endsection