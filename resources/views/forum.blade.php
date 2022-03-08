@extends('layouts.layout')



@section('forum_section')
    {{-- Main heading --}}
<h1 class="main_forum_heading display-1">Reviews</h1>
{{-- Main heading --}}

{{-- Comment section for users --}}
<form method="post" action="{{ route('forum') }}" class="mx-5 row g-3 needs-validation" novalidate>
    @csrf
    <div class="col-md-6">
        <label class="fs-4" for="user_name" class="form-label">Name</label>
        <input type="text" class="form-control" name="user_name_forum" id="user_name" autocomplete="off" required>
        <div class="invalid-feedback">
        Please enter a name.
        </div>
    </div>

    <div class="col-md-6">
        <label class="fs-4" for="user_email" class="form-label">Email</label>
        <input type="text" class="form-control" name="user_email_forum" id="user_email" autocomplete="off" required>
        <div class="invalid-feedback">
        Please enter a valid email.
        </div>
    </div>

    <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" name="comment_section" id="comment_section"></textarea>
        <label class="text-secondary" for="comment_section">Leave a comment here</label>
    </div>

    <div class="col-12">
        <button class="submit_forum_button btn btn-outline-success btn-lg fs-3" type="submit">Submit form</button>
    </div>
</form>
{{-- Comment section for users --}}


{{-- Using cards to display sample ratings --}}
<div class="card mx-5 mt-5">
    <div class="card-body">
        <h5 class="card-title">David</h5>
        <p class="text-secondary">david@gamil.com</p>
        <h6 class="card-subtitle mb-2 text-muted">
            <i class="rating_star bi bi-star-fill"></i>
            <i class="rating_star bi bi-star-fill"></i>
            <i class="rating_star bi bi-star-fill"></i>
            <i class="rating_star bi bi-star-fill"></i>
            <i class="rating_star bi bi-star-half"></i>
        </h6>
        <p class="card-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, odio necessitatibus neque aut doloribus
            ratione eveniet, ab fuga aperiam ullam delectus quia velit, ipsam corporis nobis quaerat maxime tempora sed!
        </p>
    </div>
</div>

<div class="card mx-5 mt-5">
    <div class="card-body">
        <h5 class="card-title">Max</h5>
        <p class="text-secondary">max@yahoo.com</p>
        <h6 class="card-subtitle mb-2 text-muted">
            <i class="rating_star bi bi-star-fill"></i>
            <i class="rating_star bi bi-star-fill"></i>
            <i class="rating_star bi bi-star-fill"></i>
            <i class="rating_star bi bi-star-fill"></i>
            <i class="rating_star bi bi-star-half"></i>
        </h6>
        <p class="card-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, odio necessitatibus neque aut doloribus
            ratione eveniet, ab fuga aperiam ullam delectus quia velit, ipsam corporis nobis quaerat maxime tempora sed!
        </p>
    </div>
</div>

<div class="card mx-5 mt-5">
    <div class="card-body">
        <h5 class="card-title">Luigi</h5>
        <p class="text-secondary">lingo@hotmail.com</p>
        <h6 class="card-subtitle mb-2 text-muted">
            <i class="rating_star bi bi-star-fill"></i>
            <i class="rating_star bi bi-star-fill"></i>
            <i class="rating_star bi bi-star-fill"></i>
            <i class="rating_star bi bi-star-fill"></i>
            <i class="rating_star bi bi-star-fill"></i>
        </h6>
        <p class="card-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, odio necessitatibus neque aut doloribus
            ratione eveniet, ab fuga aperiam ullam delectus quia velit, ipsam corporis nobis quaerat maxime tempora sed!
        </p>
    </div>
</div>

<div class="card mx-5 mt-5 mb-5">
    <div class="card-body">
        <h5 class="card-title">Robert</h5>
        <p class="text-secondary">rob@yahoo.com</p>
        <h6 class="card-subtitle mb-2 text-muted">
            <i class="rating_star bi bi-star-fill"></i>
            <i class="rating_star bi bi-star-fill"></i>
            <i class="rating_star bi bi-star-fill"></i>
            <i class="rating_star bi bi-star-fill"></i>
        </h6>
        <p class="card-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, odio necessitatibus neque aut doloribus
            ratione eveniet, ab fuga aperiam ullam delectus quia velit, ipsam corporis nobis quaerat maxime tempora sed!
        </p>
    </div>
</div>
{{-- Using cards to display sample ratings --}}

@endsection