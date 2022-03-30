<?php

namespace App\Http\Controllers;

use App\Models\Register;
use App\Models\StudentAttendance;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\AttendanceRegister;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
    protected function showStudents()
    {
        $students = Register::where('designation_id', 3)->get();

        $student_status = StudentAttendance::all();

        return view(
            'teacher',
            ['students' => $students],
            ['student_status' => $student_status]
        );
    }

    public function status(Request $request)
    {
        $students = Register::where('designation_id', 3)->orderBy('id')->get();

        $validation = Validator::make($request->all(), [
            'status' => 'array|required|in:1,2,3',
        ]);

        if ($validation->fails())
        {
            Alert::error('Error', 'cannot save info');
            return redirect('teacher');
        }

        $check = $request->status;

        for ($i = 0; $i < count($students); $i++)
        {
            $mark_status = AttendanceRegister::create([
                'register_id' => $students[$i]->id,
                'attendance_id' => $check[$i]
            ]);
        }

        Alert::success('Okay', 'Info has been saved');
        return redirect('teacher');
    }
}








// $check_status = StudentAttendance::where('id', 1)->orWhere('id', 2)->orWhere('id', 3)->first();

// dd($check);
// dd(count($students));
// var_dump($students[$i]->id);
// dd();

// foreach ($students as $student)
// {
    //     // var_dump($student);
    //     $mark_status = AttendanceRegister::create([
    //         'register_id' => $student->id,
    //         'attendance_id' => $check[$student]
    //     ]);
    // }
    // dd();



// foreach ($students as $student)
// {
//     $mark_status = AttendanceRegister::create([
//         'register_id' => $student->id,
//         'attendance_id' => $check.count($check)
//     ]);
// }