@extends('layouts.layout')

@section('login_section')
    {{-- Login --}}
<form action="/login" method="POST" class="row g-3 needs-validation mx-5" novalidate autocomplete="off">
    @csrf
    <div class="col-md-6">
        <label for="login_email" class="form-label fs-2">Email</label>
        <input type="text" class="form-control fs-2" name="login_email" id="login_email" required>
        <div class="invalid-feedback">
        Please enter a valid email.
        </div>
    </div>

    <div class="col-md-6">
        <label for="login_password" class="form-label fs-2">Password</label>
        <input type="password" class="form-control fs-2" name="login_password" id="login_password" required>
        <div class="invalid-feedback">
        Please enter the correct password.
        </div>
    </div>

    <label class="designation_label display-6 mt-5 mb-3">Choose your respective designation</label>
    
    <select class="form-select form-select-lg mb-2" id="designation" name="designation" aria-label=".form-select-lg example">
        <option selected>Choose your post</option>
        <option id="admin" value="admin">Admin</option>
        <option id="teacher" value="teacher">Teacher</option>
        <option id="student" class="student" value="student">Student</option>
    </select>

    <div class="col-12">
        <button class="fs-1 btn btn-outline-success btn-lg submit_button" type="submit">Login</button>
    </div>
</form>
{{-- Login --}}
@endsection
