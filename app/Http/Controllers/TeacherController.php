<?php

namespace App\Http\Controllers;

use App\Models\Register;
use App\Models\StudentAttendance;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\AttendanceRegister;
use Illuminate\Support\Facades\Validator;
use Prophecy\Promise\ReturnPromise;

class TeacherController extends Controller
{
    // fetching data from the database and looping it to see display in the web page
    protected function showStudents()
    {
        $students = Register::where('designation_id', 3)->get();

        $student_status = StudentAttendance::all();

        $delete_records = AttendanceRegister::all();

        return view(
            'teacher',
            ['students' => $students],
            ['student_status' => $student_status],
            ['delete_records' => $delete_records]
        );
    }

    // processing the attendance and marking the attendance into pivot table
    public function status(Request $request)
    {
        $students = Register::where('designation_id', 3)->orderBy('id')->get();

        $validation = Validator::make($request->all(), [
            'status' => 'array|required|in:1,2,3',
        ]);

        if ($validation->fails()) {
            Alert::error('😩 Error', 'cannot save info');
            return redirect('teacher');
        }

        $check = $request->status;

        for ($i = 0; $i < count($students); $i++) {
            $mark_status = AttendanceRegister::create([
                'register_id' => $students[$i]->id,
                'attendance_id' => $check[$i]
            ]);
        }

        Alert::success('Okay', 'Info has been saved');
        return redirect('teacher');
    }

    //edit page for editing attendance 
    public function edit_page()
    {
        $show_details = AttendanceRegister::all()->sortBy('created_at');
        return view('editPage', ['show_details' => $show_details]);
    }


    // soft deleting the attendance
    public function deleteFunction($register_id)
    {
        $delete_attendance = AttendanceRegister::where('register_id', $register_id);
        $delete_attendance->delete();
        Alert::warning('😕 Deletion Successfull', 'Attendance has been deleted successfully');
        return redirect('edit');
    }


    //had to restore because of error of trying to edit a deleted record
    public function restoreFunction()
    {
        if (AttendanceRegister::onlyTrashed()->restore()) {
            Alert::success('😇 Okay', 'restoration was a success');
            return redirect('edit');
        } else {
            Alert::info('🙂 Done that', 'already restored all of them');
            return redirect('edit');
        }
    }


    // displaying single student
    public function showSingleData($register_id)
    {
        $editAttendances = AttendanceRegister::where('register_id', $register_id)->first();
        $student_status = StudentAttendance::all();
        return view('updateAttendance',
            ['editAttendances' => $editAttendances],
            ['student_status' => $student_status]
        );
    }

    // updating the single user attendance
    public function updateFunction(Request $requesting)
    {
        $edits = AttendanceRegister::where($requesting->register_id);
        $edits->status = $requesting->status;
        $edits->save();
        Alert::success('Okay', 'Attendance has been updated');
        return redirect('edit');

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