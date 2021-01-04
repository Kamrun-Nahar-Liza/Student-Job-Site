@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Student Job Site Dashboard</div>

                <div class="panel-body">
                    <h2><b>Add Job Post</b></h2>
                <form action="{{ route('jobposts.store') }}" method="post" enctype="multipart/form-data">

                 {{ csrf_field() }}


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
    <input type="text" class="form-control" name="title"  value="{{ old('title')}}" placeholder="Enter post title ">
  </div>

   <div class="form-group">
    <label for="content">Descriptions</label>
    <textarea class="form-control" name="content"  value="{{ old('content')}}" placeholder="Enter post content "></textarea>
   </div>

   <div class="form-group">
    <label for="content">Salary</label>
    <textarea class="form-control" name="salary"  value="{{ old('salary')}}" placeholder="Enter post salary "></textarea>
   </div>
  
  <button type="submit" class="btn btn-success">Add post</button>
  
    </form>

  <hr>
  <p>
      <a href="{{ route('jobposts.index') }}" class="btn btn-primary">
        Back to Post List
      </a>
    </p>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
