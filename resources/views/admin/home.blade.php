@extends('layouts.navbar')

@section('content')


  
<div class="container-fluid">
        
<div class="sidebar">
    <a class="active" href="{{ url('admin/dashboard') }}">Dashboard</a>
    <a href="{{ url('admin/createNewAdminForm') }}">Create New User</a>
    <a href="#">Admin List</a>
    <a href="{{ url('admin/addCourseForm') }}">Create New Course</a>
    <a href="{{ url('admin/courseList') }}">Course List</a>
    <a href="#">Create New Slide</a>
    <a href="#">Slideshow List</a>
    <a href="#">something</a>
    <a href="#">something</a>
  </div>
  
  <div class="container-fluid">

    <div class="Right-Content">

      @yield('Admin-Content')

      <li class="nav-item menu-items">
          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
            
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <button class="menu-title btn btn-info">Logout</button>
            {{-- <span class="menu-title  btn-lg">Logout</span> --}}
        </a>    
        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
        </li> 
  
    </div>
    
  </div>
  
  </div>
<div class="container">
    <li class="nav-item menu-items">
        <a class="nav-link href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
          
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <button class="menu-title btn-lg btn-info">Logout</button>
          {{-- <span class="menu-title  btn-lg">Logout</span> --}}
      </a>    
      <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
      </form>
      </li> 

</div>

@endsection


<script>
    function openNav() {
      document.getElementById("mySidepanel").style.width = "250px";
    }
    
    function closeNav() {
      document.getElementById("mySidepanel").style.width = "0";
    }
</script>