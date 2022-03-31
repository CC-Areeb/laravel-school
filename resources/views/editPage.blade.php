@extends('layouts.users')

@section('edit_page')

<div class="text-center">
    <x-edit-page>
        @foreach ($show_details as $show_detail)
        <tr>
            <td>{{$show_detail->register_id}}</td>
            <td>{{$show_detail->attendance_id}}</td>
            <td>{{$show_detail->created_at}}</td>
            <td>
                <a href={{"deleteAttendance/" . $show_detail->register_id}} class="btn btn-danger">Delete</a>
                <a href={{"updateAttendance/" . $show_detail->register_id}} class="btn btn-info">Update</a>
            </td>

            <td>{{$show_detail->updated_at}}</td>
        </tr>
        @endforeach
    </x-edit-page>

    <a href={{"restoreAttendance/"}} class="btn btn-success">Restore all</a>

</div>

@endsection