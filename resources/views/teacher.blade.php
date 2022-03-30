@extends('layouts.users')

@section('teacher')
<form action="/present" method="post">
    @csrf
    <div class="text-center mt-2">
        <x-teacher-page>
            @isset($students)
            @foreach ($students as $student)
            <tr>
                <th>{{$student->id}}</th>
                <th colspan="2">{{$student->first_name}} {{$student->last_name}}</th>
                <th>{{$student->user_email}}</th>
                <th>{{$student->address}}</th>
                <th>{{$student->designation_id}}</th>
                <th>
                    @isset($student_status)
                    <select class="form-select status" id="status" name="status[]" aria-label="Default select example">
                        <option>Attendance</option>
                        @foreach ($student_status as $status)
                        <option value="{{$status->id}}">{{$status->Status}}</option>
                        @endforeach
                    </select>
                    @endisset
                    
                </th>
            </tr>
            @endforeach
            @endisset

        </x-teacher-page>
    </div>
    <div class="">
        <button type="submit" class="btn btn-outline-success">send</button>
    </div>

</form>
@endsection