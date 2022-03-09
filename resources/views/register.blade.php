@extends('layouts.layout')

@section('register_section')
{{-- autocomplete="off" --}}

{{-- Registeration Form--}}
<form action="" method="POST" class="row g-3 needs-validation mx-5" novalidate>
    @csrf
    <div class="col-md-4">
        <label for="first_name" class="form-label fs-4">First name</label>
        <input type="text" class="form-control" name="first_name" id="first_name" required>
        <div class="invalid-feedback">
        Please enter your first name.
        </div>
    </div>

    <div class="col-md-4">
        <label for="last_name" class="form-label fs-4">Last name</label>
        <input type="text" class="form-control" name="last_name" id="last_name" required>
        <div class="invalid-feedback">
        Please enter your last name.
        </div>
    </div>

    <div class="col-md-4">
        <label for="user_email" class="form-label fs-4">Email</label>
        <input type="email" class="form-control" name="user_email" id="user_email" required>
        <div class="invalid-feedback">
        Please enter a valid email.
        </div>
        <span class="text-danger">@error('user_email'){{$message}}@enderror</span>
    </div>

    <div class="col-md-4">
        <label for="user_password" class="form-label fs-4">Password</label>
        <input type="password" class="form-control" name="user_password" id="user_password" required>
        <div class="invalid-feedback">
        Please enter password.
        </div>
    </div>

    <div class="col-md-4">
        <label for="confirm_user_password" class="form-label fs-4">Confirm Password</label>
        <input type="password" class="form-control" name="confirm_user_password" id="confirm_user_password" required>
        <div class="invalid-feedback">
        Please confirm your password.
        </div>
    </div>

    <div class="col-md-4">
        <label for="user_address" class="form-label fs-4">Your Address</label>
        <input type="text" class="form-control" name="user_address" id="user_address" required>
        <div class="invalid-feedback">
        Please enter your current address.
        </div>
    </div>


{{-- select box for choosing their designation --}}
<select class="form-select form-select-lg mb-2" id="designation" name="designation" aria-label=".form-select-lg example">
    <option selected>Choose your post</option>
    <option id="admin" value="admin">Admin</option>
    <option id="teacher" value="teacher">Teacher</option>
    <option id="student" class="student" value="student">Student</option>
</select>
{{-- select box for choosing their designation --}}


{{-- check boxes when the designation is student --}}
<div id="subjects" class="subjects">
    <ul class="list-group">
            @foreach ($subjects ?? '' as $subject)
            <li class="list-group-item fs-2 mx-5">
                <input type="checkbox" class="form-check-input" id="btn-check" name="course_ids[]" value="{{$subject->id}}" autocomplete="off">
                {{$subject->id}} - {{ $subject->course_offered }}
            </li>
            @endforeach 
</div>
{{-- check boxes when the designation is student --}}


<div class="col-12">
    <button class="fs-1 btn btn-outline-success btn-lg submit_button" type="submit">Submit form</button>
</div>

</form>
{{-- Regsteration --}}


@endsection