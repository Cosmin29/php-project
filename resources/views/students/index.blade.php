@extends('students.layout')

@section('content')
    <div class="pull-left">
        <h2>Students CRUD</h2>
    </div>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="success-btn">
                <a class="btn btn-success" href="{{ route('students.create') }}"> Create a new Student</a>
            </div>
        </div>    
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Student Name</th>
            <th>University</th>
            <th>Faculty</th>
            <th>Tax</th>
            <th width="200px">Action</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $student->studentName }}</td>
            <td>{{ $student->university }}</td>
            <td>{{ $student->faculty }}</td>
            <td>{{ $student->tax }}</td>
            <td>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('students.show', $student->id) }}" style="font-size:50%"><x-bx-show />Show</a>
                <a class="btn btn-primary" href="{{ route('students.edit', $student->id) }}" style="font-size:50%"><x-feathericon-edit />Edit</a>


                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger" style="font-size:50%"><x-heroicon-s-trash />Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection