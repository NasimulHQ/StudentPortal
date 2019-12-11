<?php

namespace App\Http\Controllers;

use App\result;
use App\student;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index($id){
        $results = result::where('student_id', $id)->get();
        $totalNumber = result::where('student_id', $id)->sum('marks');
        $student = student::findOrFail($id);
        return view('result.index',compact('results', 'id', 'totalNumber', 'student'));
    }
    public function create($id){
        $studentById = student::findOrFail($id);
        return view('result.result',compact('studentById'));
    }
    public function store(Request $request){
        result::create([
            'subject' => $request->get('subject'),
            'marks' => $request->get('marks'),
            'gpa' => $request->get('gpa'),
            'student_id' => $request->get('student_id'),
        ]);
        return redirect('/result/'.$request->student_id);
    }
    public function edit($id){
        $result = result::findOrFail($id);
        return view('result.edit',compact('result'));
    }
    public function update($id){
        $result = result::findOrFail($id);
        $result->subject = request('subject');
        $result->marks = request('marks');
        $result->gpa = request('gpa');
        $result->save();
        return redirect('/result');
    }
    public function destroy($id){
        $result = result::findOrFail($id);
        $result->delete();
        return redirect('/result/'.$result->student_id);
    }
}
