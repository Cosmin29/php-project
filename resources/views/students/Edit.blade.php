@extends('students.layout')

@section('content')
    <div class="row" styles="margin-top:10rem">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" style="text-align:center">
                <h2>Edit Data</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('students.index') }}" >Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-grup">
                    <strong>Student Name</strong>
                    <input type="text" name='studentName' value="{{ $student->studentName }}" class="form-control" placeholder="Student Name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-grup">
                    <strong>University</strong>
                    <input type="text" name='university' value="{{ $student->university }}" class="form-control" placeholder="University">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-grup">
                    <strong>Faculty</strong>
                    <input type="text" name='faculty' value="{{ $student->faculty }}" class="form-control" placeholder="Faculty">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-grup">
                    <strong>Tax</strong>
                    <input type="text" name='tax' value="{{ $student->tax }}" class="form-control" placeholder="Tax">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
