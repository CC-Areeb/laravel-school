@extends('layouts.master')

@section('home')
<div class="container mt-5">
    <div class="row">
        <div class="col-7">
            <x-home-page-text></x-home-page-text>
        </div>

        <div class="col-4">
            <x-home-page-cards></x-home-page-cards>
        </div>      
    </div>
</div>

@endsection