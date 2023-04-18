<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index() {
       // $students = DB::table('students')->get();
       $students = Student::paginate(5);
       // return $students;
        return view('student.index', [
            'students' => $students
        ]);
    }

    public function addView() {
        return view ('student.create');
    }

    public function store (Request $request){
        $data = [
            'name' => $request ->name,
            'email' => $request ->email,
            'phone' => $request ->phone,
        ];
        Student::create($data);

        return redirect('/student');

    }

    public function destroy ($id){
        $student = Student::findOrFail($id);

        $student -> delete();

        return redirect('/student');
    }
}
