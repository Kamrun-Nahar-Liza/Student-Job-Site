@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Student Job Site Dashboard</div>

                <div class="panel-body">
                <div class="weLl">
                <h2><b>Job Post List</b></h2>
        
        <p>
            <a href="{{ route('jobposts.create') }}" class="btn btn-success">
                <i class="fa fa-plus">  Add Job Post</i>
            </a>
        </p>
        

        @if(session()->has('message'))
            <div class="alert alert-danger">
                 {{ session('message')}}
            </div>
        @endif
        <div>
        <table class="table table-bordered table-condensed">
            <thead class="thead-dark">
                <tr >
                
                <th>Title</th>
                <th>Content</th>
                <th>Salary</th>
                <th>Action</th> 
                </tr>
            </thead>

            <tbody>

                @foreach($jobs as $job)
                 
                <tr>
                    
                    <td>{{ $job->title }}</td>
                    <td>{{ $job->content }}</td>
                    <td>{{ $job->salary }}</td>
                    
                    <td>
                        <a href="{{ route('jobposts.show' , $job->id) }}" class="btn btn-info">
                            <i class="fa fa-external-link-square">  Details</i>
                        </a>
                  </tr>
                
                @endforeach
            </tbody>
        </table>

        </div>
                     <a href="{{ route('home') }}" class="btn btn-info">
                            <i class="fa fa-external-link-square">  Back to Home</i>
                        </a>

    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
