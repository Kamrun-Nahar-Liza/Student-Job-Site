@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Student Job Site Dashboard</div>

                <div class="panel-body">
                    <h2><b>Edit Job Post</b></h2>

    <form action="{{ route('jobposts.update', $job->id) }}" method="post" enctype="multipart/form-data">

    {{ csrf_field() }}
  <input name="_method" type="hidden" value="PUT">


    @if ($errors->any())
    <div class="alert alert-danger">
            @if($errors->count() == 1)
              {{ $errors->first() }}
            @else
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            
        </ul>
        @endif
    </div>
@endif

@if(session()->has('message'))
 <div class="alert alert-success">
    {{ session('message')}}
 </div>
@endif


 <div class="form-group">
    <label for="title">Job Title</label>
    <input type="text" class="form-control" name="title"  value="{{ $job->title }}" placeholder="Enter post title ">
  </div>

   <div class="form-group">
    <label for="content">Description</label>
    <textarea class="form-control" name="content"  value="{{ $job->content }}" placeholder="Enter post content "></textarea>
    
  </div>
  
  <div class="form-group">
    <label for="salary">Salary</label>
    <input type="text" class="form-control" name="salary"  value="{{ $job->salary }}" placeholder="Enter post salary ">
    
  </div>
  
  
  <button type="submit" class="btn btn-primary">Update Post</button>
    </form>

  <hr>
  <p>
      <a href="{{ route('jobposts.index')}}" class="btn btn-success">
        Back to Post
      </a>
    </p>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
