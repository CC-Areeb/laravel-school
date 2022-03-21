<div class="register_form">
    
    <form action="registration" method="POST"  class="register_form row g-3 needs-validation" novalidate autocomplete="on">
        @csrf
        <label for="first_name" class="form-label">First name
            <input type="text" class="form-control" name="first_name" id="first_name" required>
        </label>
        <div class="invalid-feedback">
            Please enter your first name.
        </div>

        <label for="last_name" class="form-label">Last name
            <input type="text" class="form-control" name="last_name" id="last_name" required>
        </label>
        <div class="invalid-feedback">
            Please enter your last name.
        </div>

        <label for="user_email" class="form-label">Email
            <input type="email" class="form-control" name="user_email" id="user_email" required>
        </label>
        <div class="invalid-feedback">
            Please provide a valid email.
        </div>

        <label for="password" class="form-label">Password
            <input type="password" class="form-control" name="password" id="password" required>
        </label>
        <div class="invalid-feedback">
            Please enter a password.
        </div>

        <label for="password_confirmation" class="form-label">Confirm password
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
        </label>
        <div class="invalid-feedback">
            Please re-enter the same password.
        </div>

        <label for="address" class="form-label">Address
            <input type="text" class="form-control" name="address" id="address" required>
        </label>
        <div class="invalid-feedback">
            Please choose a username.
        </div>

        {{$slot}}

        <div class="col-12 text-center">
            <button class="btn btn-outline-success fs-2 register_btn" type="submit">Register Now</button>
        </div>
    </form>

</div>