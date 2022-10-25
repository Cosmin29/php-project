@extends('students.layout')

@section('content')
    <div class="row">
    <div class="col-lg-12 margin-tb"></div>
    <div class="pull-left">
        <h2>Add New Student</h2>
    </div>

    <div class="pull-right">
        <a class="btn-grad" href="{{ route('students.index') }}">Back</a>
    </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops !</strong> There were some problems with your input.<br><br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Student Name</strong>
                    <input type="text" name="studentName" class="form-control" placeholder="Student Name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>University</strong>
                    <input type="text" name="university" class="form-control" placeholder="University">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Faculty</strong>
                    <input type="text" name="faculty" class="form-control" placeholder="Faculty">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tax</strong>
                    <input type="text" name="tax" class="form-control" placeholder="tax">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="submit-btn">Submit</button>
            </div>
        </div>
    </form>
@endsection