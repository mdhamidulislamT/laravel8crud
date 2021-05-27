@extends('layouts.layout')

@section('content')

<div class="row">
    <div class="col col-lg-12 m-2 ">
        <h4>User List</h4>
        <div class="mb-1 row">
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
        @endif
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Serial no.</th>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Avatar</th>
                    <th>actions</th>
                </tr>
            </thead>
             @php
                 $serial = 1;
             @endphp
                @foreach ($users as  $user)
                <tbody>
                    <th scope="row">{{ $serial++ }}</th>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->fullname }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>
                        <img width="100px" height="60px" class=" rounded " src="{{ URL::asset('avatars/'.$user->image) }}" alt="">

                    </td>
                    <td>
                        <a href="{{"show/".$user->id }}" class="btn btn-info">Show</a> |
                        <a href="{{"edit/".$user->id }}" class="btn btn-primary">Edit</a> |
                        <a href="{{"delete/".$user->id }}" class="btn btn-danger">Delete</a>
                    </td>
                     </tbody>
                @endforeach      
        </table>
        <span>{{ $users->links() }}</span>
        <style>
            .w-5{display: none;}
        </style>
    </div>
</div>

@stop