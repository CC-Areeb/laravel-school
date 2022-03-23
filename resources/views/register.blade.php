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
                    <select class="selected form-select designation_selector" name="designation_id"
                        id="designation_selector" required="true" aria-label="Default select example">
                        <option>Select designation:</option>
                        @foreach ($designation as $post)
                        <option value="{{$post->id}}"> {{$post->designation}} </option>
                        @endforeach
                    </select>
                </div>
                @endisset



                {{-- @isset($courses) --}}
                <div class="courses">

                    {{-- @foreach ($courses as $course)
                    <div class="form-check">
                        <label class="form-check-label" for="courses_id">
                            <input class="form-check-input" type="checkbox" name="courses_id[]"
                            id="{{$course->Courses}}" value="{{$course->id}}">
                        </label>
                    </div>
                    @endforeach --}}
                </div>
            <input type='hidden' id="course_id" value="" />

                {{-- @endisset --}}

            </x-register-page>
        </div>
    </div>
</div>

@endsection


{{--
<input class="form-check-input subject" type="checkbox" id="subject">
<label class="form-check-label" for="subject">
    subject from database
</label>

$request->designation_id === 1
--}}