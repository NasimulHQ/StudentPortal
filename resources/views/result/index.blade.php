@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-3">
                <a href="{{route('result.create', $id)}}" class="btn btn-outline-success">
                    Add Subject
                </a>
                <a href="{{route('student')}}" class="btn btn-outline-primary">
                    Go Back
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header text-white bg-primary">{{ $student->name }} Result</div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <th>Subject</th>
                            <th>Marks</th>
                            <th>GPA</th>
                            <th>Actions</th>
                            </thead>

                            <tbody>
                            @foreach($results as $result)
                                <tr>
                                    <td>{{$result->subject}}</td>
                                    <td>{{$result->marks}}</td>
                                    <td>{{$result->gpa}}</td>
                                    <td>
                                        <a href="{{route('result.edit',[$result->id])}}">
                                            <button type="submit" class="btn btn-outline-primary">Edit</button>
                                        </a>
                                        <a href="{{route('result.destroy',[$result->id])}}">
                                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="2">Total Subject</td>
                                <td colspan="2">{{ $results->count() }}</td>
                            </tr>
                            <tr>
                                <td colspan="2">Total Marks</td>
                                <td colspan="2">{{ number_format($totalNumber, 2) }}</td>
                            </tr>
                            <tr>
                                <td colspan="2">Average</td>
                                <td colspan="2">{{ $number = number_format($totalNumber/$results->count(), 2) }}</td>
                            </tr>
                            <tr>
                                <td colspan="2">CGPA</td>
                                <td colspan="2">{{ cgpaCalculator($number) }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

