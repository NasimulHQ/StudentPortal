@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-3">
                <a href="{{route('student.create')}}" class="btn btn-outline-primary">
                    Add Student
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header text-white bg-primary">Student Information</div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <th>Name</th>
                                <th>Class</th>
                                <th>Roll</th>
                                <th>Actions</th>
                            </thead>

                            <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <td>{{$student->name}}</td>
                                        <td>{{$student->class}}</td>
                                        <td>{{$student->roll}}</td>
                                        <td>
                                            <a href="{{route('student.edit',[$student->id])}}">
                                                <button type="submit" class="btn btn-outline-primary">Edit</button>
                                            </a>
                                            <a href="{{route('student.destroy',[$student->id])}}">
                                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                                            </a>
                                            <a href="{{route('result.create', $student->id)}}">
                                                <button type="submit" class="btn btn-outline-dark">Add Result</button>
                                            </a>
                                            <a href="{{route('result.index', $student->id)}}">
                                                <button type="submit" class="btn btn-outline-success">View Result</button>
                                            </a>
                                        </td>
                                    </tr>
                                 @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
