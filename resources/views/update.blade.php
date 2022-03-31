@extends('layouts.users')

@section('update')
    <div class="container">
        <div class="row">

            <div class="col-7">
                <img src="/images/update-logo.jpg" class="img-fluid" alt="update-logo">
            </div>

            <div class="col-5">

                <form class="row g-3" action="/update" method="post" novalidate>
                    @csrf

                    <input type="hidden" name="id" value="{{$data->id}}">

                    <label for="first_name" class="form-label">First name
                        <input class="form-control" type="text" name="first_name" id="first_name" value="{{$data->first_name}}">
                    </label>

                    <label for="last_name" class="form-label">Last name
                        <input class="form-control" type="text" name="last_name" id="last_name" value="{{$data->last_name}}">
                    </label>

                    <label for="user_email" class="form-label">Email
                        <input class="form-control" type="email" name="user_email" id="user_email" value="{{$data->user_email}}">
                    </label>

                    <label for="address" class="form-label">Address
                        <input class="form-control" type="text" name="address" id="address" value="{{$data->address}}">
                    </label>

                    <div class="col-12 text-center">
                        <button class="btn btn-outline-primary" type="submit">Update</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection