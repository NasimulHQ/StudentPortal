@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #1d643b">Student Result</div>

                    <div class="card-body">
                        <form action="{{route('result.update',[$result->id])}}" method="get">
                            @csrf
                            <div class="form-group">
                                <label for="subject">
                                    Subject:
                                </label>
                                <input value="{{$result->subject}}" name="subject" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label for="marks">
                                    Marks:
                                </label>
                                <input value="{{$result->marks}}" name="marks" class="form-control" type="number">
                            </div>
                            <div class="form-group">
                                <label for="gpa">
                                    GPA:
                                </label>
                                <input value="{{$result->gpa}}" name="gpa" class="form-control" type="text">
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
