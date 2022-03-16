@extends('layouts.master')

@section('login')

<div class="container mt-5">
    <div class="row">
        <div class="col-7">
            <x-login-page-logo></x-login-page-logo>
        </div>

        <div class="col-5">
            <x-login-page></x-login-page>
        </div>
    </div>
</div>

@endsection