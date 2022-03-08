@extends('layouts.admin_teacher')

@section('admin')

<h1 class="display-1 text-dark text-center">Welcome</h1>

<div class="row ">
    <div class="col">
        <label class="display-6 mt-5 mb-3">Delete users by entering their Id number</label>
        <div class="input-group">
            <span class="input-group-text fs-2">Id: </span>
            <input type="number" aria-label="First name" class="form-control fs-2">
        </div>
    </div>
</div>
<input class="col-4 btn btn-outline-danger fs-1 delete_button" type="delete_user_submit" value="Delete user">


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