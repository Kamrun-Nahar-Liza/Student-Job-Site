@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Student Job Site Dashboard</div>

    <div class="panel-body">
    
    <h2><b>Job Title:</b> {{ $job->title }}</h2>
    
    <h3>
        <b>Description:</b> {{ $job->content }}
    </h3>

    <h3>
        <b>Salary:</b> {{ $job->salary }}
    </h3>
    
    <p>
        Posted at: {{ $job->created_at->diffforHumans() }}
    </p>

    <p>

  <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group mr-2" role="group" aria-label="First group">
    <a href="{{ route('jobposts.edit', $job->id) }}" class="btn btn-success"><i class="fa fa-pencil-square-o"> Edit </i></a>
  </div>
  <div class="btn-group mr-2" role="group" aria-label="Second group">
    <form action="{{ route('jobposts.destroy', $job->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete?')">
            
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="DELETE">
            <button type="submit" class="btn btn-danger ">
                <i class="fa fa-trash">  Delete </i>
            </button>

        </form>
  </div>
</div>


    <hr>
    <div>
        <a href="{{ route('jobposts.index')}}" class="btn btn-primary lg">
        Back to Post
      </a>
    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
