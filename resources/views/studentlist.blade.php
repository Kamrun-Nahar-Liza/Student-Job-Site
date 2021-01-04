@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Student List</div>

                <div class="panel-body">
                    
            <table class="table table-bordered table-condensed">
            <thead class="thead-dark">
                <tr >
                <th>Name</th>
                <th>Email</th>
                <th>ID</th>
                <th>Department</th>
                </tr>
            </thead>

            <tbody>

                @foreach($users as $user)
                 
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->student_id }}</td>
                    <td>{{ $user->department }}</td>

                @endforeach
                
                </tr>
            </tbody>
            </table>
                    <a href="{{ route('home') }}" class="btn btn-info">
                            <i>Back to Dashboard</i>
                        </a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
