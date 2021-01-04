@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Student Job Site Dashboard</div>

                <div class="panel-body">
                    <h2 >Hello {{ Auth::user()->name }}</h2>
                    <h4>Your Id: {{ Auth::user()->student_id }}</h4>
                    <h4>Your Department: {{ Auth::user()->department }}</h4>


                    <a href="{{ route('studentlists') }}" class="btn btn-info">
                            <i>Student List</i>
                        </a>
                    <a href="{{ route('jobposts.index') }}" class="btn btn-info">
                            <i>View Job Post</i>
                        </a>
                    
                    <!-- This id will be for admin -->
                        @if(Auth::id()==1)
                    <a href="#" class="btn btn-info">
                            <i>Add Job</i>
                        </a>
                        @endif
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
