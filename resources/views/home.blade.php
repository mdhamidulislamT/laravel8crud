@extends('layouts.navbar')

@section('content')

<div class="container">
    
<!----Carousel start------------------>
<div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
    <div class="carousel-indicators"> 
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="4000">
        <img height="200" src="{{ URL::asset('pcs_logo/web3.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="4000">
        <img height="200" src="{{ URL::asset('pcs_logo/web2.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block" >
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="4000">
        <img height="200" src="{{ URL::asset('pcs_logo/web1.jfif') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!---Carousel End-------------------->
</div>


<div class="container">
    

  <div class="my-3" id="card">
        
    <div class="bd-example">
      <!--------- row-cols-lg-3 is used to take 100% width by 3 image ---->
        <div class="row  row-cols-1 row-cols-lg-4 g-1">
          
        @foreach ($courses as $course)

          <div class="col col-md-2">
            <div class="card my_card_img">
                <a href="#" >
                    <img  src="{{ asset('avatars/'.$course->course_image) }}" alt="" height="160" width="100%">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{  $course->course_title }}</h5>
                    <ul>
                      <li>Total Hours :{{  $course->total_hour }} hrs</li>
                      <li>Total Classes : {{ $course->total_class }}</li>
                    </ul>
                   
                    <a href="#" class="btn btn-sm btn-primary ">Course Details</a>
                    <a href="#" class="btn btn-success btn-sm float-end">Enroll Now</a>
                </div>
                <div class="card-footer ">
                    Course Fee : TK. {{ $course->fee }} 
                </div>
            </div>
          </div>
        @endforeach

        </div>
    </div>
  </div>
  

</div>

@endsection