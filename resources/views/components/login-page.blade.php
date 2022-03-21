<form action="dahsboard" method="post" class="row g-3 needs-validation" autocomplete="off" novalidate>
    @csrf
    <label for="email" class="form-label fs-4">Email
        <div class="input-group has-validation">
            <input type="text" class="form-control fs-4" name="email" id="login_email" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
                Please enter the email
            </div>
        </div>
    </label>

    <label for="password" class="form-label fs-4">Password
        <div class="input-group has-validation">
            <input type="password" class="form-control fs-4" name="password" id="login_password" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
                Please enter the password.
            </div>
        </div>
    </label>

    <div class="col-12 text-center">
        <button class="btn btn-outline-success fs-1" type="submit">Login</button>
        {{-- <input type="submit" name="submit" class="btn btn-outline-success fs-1" value="Login"> --}}
    </div>

</form>