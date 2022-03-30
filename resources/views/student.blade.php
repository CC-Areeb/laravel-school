@extends('layouts.users')


@section('student')

<div class="text-center">
    <x-student-page>
        @isset($myDetails)
        @foreach ($myDetails as $myDetail)
        <tr>
            <th>{{$myDetail->id}}</th>
            <th colspan="2">{{$myDetail->first_name}} {{$myDetail->last_name}}</th>
            <th>{{$myDetail->user_email}}</th>
            {{-- <th>{{$myDetail->address}}</th> --}}
            {{-- <th>NULL</th> --}}
            {{-- <th>{{$myDetail->attendance_id}}</th>   --}}
        </tr>
        @endforeach
    @endisset
    </x-student-page>
</div>    

@endsection
