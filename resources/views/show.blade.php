@extends('layouts.layout')

@section('content')
<div class="m-4 text-info  bg-dark" style="height: 400px;">
    <div style="margin-left: 200px">
        <div style="float: left" class="mt-4">
            <h2> <u>User Information </u></h2>
            <h5>ID : {{ $user->id }} </h5>
            <h4>UserName :- {{ $user->username }} </h4>
            <h4>Full Name :- {{ $user->fullname }} </h4>
            <h4>Phone No :- {{ $user->phone }} </h4>
            <h4>Email :- {{ $user->email }} </h4>
            <h4>Gender :- {{ $user->gender }} </h4>
            <h4>Created_at :-{{ $user->created_at }}</h4>
            <h4>Updated_at :- {{  $user->updated_at }}</h4>
        </div>
        <div>
            
                <img width="300px" height="300px" class=" rounded m-4 " src="{{ URL::asset('avatars/'.$user->image) }}" alt="">
        </div>
        
    </div>
</div>


@stop