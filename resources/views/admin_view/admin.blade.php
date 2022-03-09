@extends('layouts.admin_teacher')

@section('admin')

<h1 class="display-1 text-dark text-center">Welcome</h1>

<input class="col-4 mb-5 mt-5 btn btn-outline-danger fs-1 see_all_btn" type="submit" value="See everyone">



<div class="show_all_users mx-5 row">
    <table class="table table-dark table-striped table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Designation</th>
                <th>Action</th>
            </tr>
        </thead>

        @foreach ($users as $user)
        <tbody>
            <tr>
                <th>{{ $user->id }}</th>
                <td> {{ $user->first_name }} </td>
                <td> {{ $user->last_name }} </td>
                <td> {{ $user->designation }} </td>
                <td>dummy</td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>





{{-- <div class="row ">
    <div class="col">
        <label class="display-6 mt-5 mb-3">Delete a user by entering their Id number</label>
        <div class="input-group">
            <span class="input-group-text fs-2">Id: </span>
            <input type="number" aria-label="First name" class="form-control fs-2">
        </div>
    </div>
</div> --}}
{{-- <form action="{{ route('delete_single') }}" method="post">
    @csrf
    <input class="col-4 btn btn-outline-danger fs-1 delete_button" type="submit" value="Delete user">
</form> --}}

<div class="row ">
    <div class="col">
        <label class="display-6 mt-5 mb-3">Search a specific user by entering their Id number</label>
        <div class="input-group">
            <span class="input-group-text fs-2">Id: </span>
            <input type="number" aria-label="First name" class="form-control fs-2">
        </div>
    </div>
</div>
<input class="col-4 btn btn-outline-success fs-1 delete_button" type="single_user_search_submit" value="Search user">


<div class="row">
    <div class="col">
        <label class="display-6 mt-5 mb-3">Search all by choosing the respective designation</label><br>
    </div>
</div>

<div class="col-4 btn-group search_by_radio" role="group" aria-label="Basic radio toggle button group">
    <input type="radio" class="btn-check" name="designation" id="admin" autocomplete="off" >
    <label class="btn btn-outline-dark fs-4" for="admin">Admin</label>

    <input type="radio" class="btn-check" name="designation" id="teacher" autocomplete="off" >
    <label class="btn btn-outline-dark fs-4" for="teacher">Teacher</label>

    <input type="radio" class="btn-check" name="designation" id="student" autocomplete="off" >
    <label class="btn btn-outline-dark fs-4" for="student">Student</label>
</div>
<input class="col btn btn-outline-primary fs-1 my-5 delete_button" type="single_user_search_submit" value="Search user">
<br>
@endsection