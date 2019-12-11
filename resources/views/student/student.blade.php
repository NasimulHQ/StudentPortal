@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-white bg-primary">Student Information</div>

                    <div class="card-body">
                        <form action="{{route('student.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">
                                    Name:
                                </label>
                                <input name="name" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label for="name">
                                    Class:
                                </label>
                                <input name="class" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label for="name">
                                    Roll:
                                </label>
                                <input name="roll" class="form-control" type="number">
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
