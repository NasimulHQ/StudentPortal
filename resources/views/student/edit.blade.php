@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #1d643b">Update Student Information</div>

                    <div class="card-body">
                        <form action="{{route('student.update',[$student->id])}}" method="get">
                            @csrf
                            <div class="form-group">
                                <label for="name">
                                    Name:
                                </label>
                                <input value="{{$student->name}}" name="name" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label for="class">
                                    Class:
                                </label>
                                <input value="{{$student->class}}" name="class" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label for="roll">
                                    Roll:
                                </label>
                                <input value="{{$student->roll}}" name="roll" class="form-control" type="number">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-success">Update</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
