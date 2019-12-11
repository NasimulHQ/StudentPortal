@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-white bg-primary">Student Result</div>

                    <div class="card-body">
                        <form action="{{route('result.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="subject">
                                    Subject:
                                </label>
                                <input name="subject" class="form-control" type="text">
                                <input type="hidden" name="student_id" value="{{$studentById->id}}">
                            </div>
                            <div class="form-group">
                                <label for="marks">
                                    Marks:
                                </label>
                                <input name="marks" class="form-control" type="number">
                            </div>
                            <div class="form-group">
                                <label for="gpa">
                                    GPA:
                                </label>
                                <input name="gpa" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
