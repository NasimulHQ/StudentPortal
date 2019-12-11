<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class StudentController extends Controller
{
    public function index(){
        $students = student::get();
        return view('student.index',compact('students'));
    }
    public function create(){
        return view('student.student');
    }
    public function store(Request $request){
        student::create([
            'name'=> $request->get('name'),
            'class'=> $request->get('class'),
            'roll'=> $request->get('roll'),
        ]);
        return redirect('/student');
    }
    public function edit($id){
        $student = student::findOrFail($id);
        return view('student.edit',compact('student'));
    }
    public function update($id){
        $student = student::findOrFail($id);
        $student->name = request('name');
        $student->class = request('class');
        $student->roll = request('roll');
        $student->save();
        return redirect('/student');
    }
    public function destroy($id){
        $student = student::findOrFail($id);
        $student->delete();
        return redirect('/student');
    }
}
