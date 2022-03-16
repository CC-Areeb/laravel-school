@extends('layouts.master')

@section('registration')

<div class="container mt-5">
    <div class="row">
        <div class="col-7">
            <x-register-page-logo></x-register-page-logo>
        </div>

        <div class="col-5">
            <x-register-page>
                
                @isset($designation)
                <div class='with-select'>
                    <select class="selected form-select" name="designation_id" required="true" aria-label="Default select example">
                        <option>Select designation:</option>
                        @foreach ($designation as $post)
                            <option value="{{$post->id}}"> {{$post->designation}} </option>
                        @endforeach
                    </select>
                </div>
                @endisset
            </x-register-page>
        </div>
    </div>
</div>

@endsection