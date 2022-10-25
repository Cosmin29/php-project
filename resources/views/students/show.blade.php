@extends('students.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Show Details</h3>
        </div>
        <div class="card-body">
            <h5 class="card-title">Student Name : {{ $student->studentName }}</h5>
            <p class="card-text">University : {{ $student->university }}</p>
            <p class="card-text">Faculty : {{ $student->faculty }}</p>
            <p class="card-text">Tax : {{ $student->tax }}</p>
        </div>
            </hr>
        </div>
    </div>
    <div class="pull-right">
        <a class="back-btn" href="{{ route('students.index') }}" >Back</a>
    </div>
    
@endsection