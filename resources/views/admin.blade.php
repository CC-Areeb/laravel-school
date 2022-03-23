@extends('layouts.users')


@section('admin')
    <x-admin-page>

    @isset($users)
        @foreach ($users as $user)
        <tr>
            <th>{{$user->id}}</th>
            <th colspan="2">{{$user->first_name}} {{$user->last_name}}</th>
            <th>{{$user->user_email}}</th>
            <th>{{$user->address}}</th>
            <th>{{$user->designation_id}}</th>
            {{-- <th>{{$user->course_id}}</th> --}}
            <th>{{$user->created_at}}</th>
            <th>
                    <a href={{"update/".$user->id}} class="update_btn btn btn-info">Update</a>
                    &nbsp;
                    <a href={{"delete/".$user->id}} class="delete_btn btn btn-danger">Delete</a>
            </th>
        </tr>
        @endforeach
    @endisset

    </x-admin-page>
@endsection