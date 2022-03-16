<form action="dashboard" method="post" class="row g-3 needs-validation" novalidate>
    @csrf
    <label for="login_email" class="form-label">Email</label>
    <div class="input-group has-validation">
        <input type="text" class="form-control" name="login_email" id="login_email" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
            Please enter the email
        </div>
    </div>

    <label for="login_password" class="form-label">Password</label>
    <div class="input-group has-validation">
        <input type="password" class="form-control" name="login_password" id="login_password" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
            Please enter the password.
        </div>
    </div>

    <div class="col-12 text-center">
        <button class="btn btn-success fs-2" type="submit">Login</button>
    </div>

</form>