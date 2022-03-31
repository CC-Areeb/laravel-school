@extends('layouts.users')

@section('updateAttendance')
<div class="text-center">
    <form action="/updateAttendance" method="post">
        @csrf
        <table class="table table-light table-striped">
            <thead>
                <tr>
                    <th>Student id</th>
                    <th>Attendance id</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Update attendance</th>
                </tr>

                <tr>
                    <td>{{$editAttendances->register_id}}</td>
                    <td>{{$editAttendances->attendance_id}}</td>
                    <td>{{$editAttendances->created_at}}</td>
                    <td>{{$editAttendances->updated_at}}</td>

                    <td>
                        <select class="form-select status" id="status" name="status[]" aria-label="Default select example">
                            <option selected disabled>Attendance</option>
                            @foreach ($student_status as $status)
                                <option value="{{$status->id}}">{{$status->Status}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
            </thead>
        </table>
        <button type="submit" class="btn btn-info text-white">Update</button>
    </form>
</div>
@endsection