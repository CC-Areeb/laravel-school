<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body class="home_body">


{{-- Sticky navigation bar --}} 
<nav class="navbar navbar-dark bg-light sticky-md-top ps-5">

    <a href="home" class="anchor_buttons_outside btn btn-outline-primary border-0 fs-3">Home</a><br><br>

    <a href="about" class="anchor_buttons_outside btn btn-outline-primary border-0 fs-3">About Us</a><br><br>

    <a href="register" class="anchor_buttons_outside btn btn-outline-primary border-0 fs-3">Register</a><br><br>

    <a href="login" class="anchor_buttons_outside btn btn-outline-primary border-0 fs-3">Login</a><br><br>

    <a href="contact" class="anchor_buttons_outside btn btn-outline-primary border-0 fs-3">Contact Us</a><br><br>

    <a href="forum" class="anchor_buttons_outside btn btn-outline-primary border-0 fs-3">Our Forum</a><br><br>
</nav>
<br>
{{-- Sticky navigation bar --}}


{{-- @include('sweet::alert') --}}
@include('sweetalert::alert')

{{-- Yield all the sections here --}}
    @yield('home_section')
    @yield('about_us_section')
    @yield('forum_section')
    @yield('register_section')
    @yield('login_section')
{{-- Yield all the sections here --}}


<button onclick="back_to_top()" id="top_button" title="Go to top">Top</button>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>