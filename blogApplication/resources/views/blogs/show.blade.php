@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-md-12">
        <br>
        <h3>{{ $blog->title }}</h3>  <br>      
        <img src="{{asset($blog->image)}}" class="card-img-top"> <br><br>
        <p class="lead">
        {{$blog->content}}
        </p>

        <a href="{{route('edit_blog_path', ['blog' => $blog->id])}}" class="btn btn-outline-info">Edit</a>
        <a href="{{route('blogs_path')}}" class="btn btn-outline-secondary">Back</a>

        <br>
        <br>

        <form action="{{ route('delete_blog_path', ['blog'=> $blog->id] )}}" method="POST">

        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-outline-danger">Delete</button>
         
        </form>
       

    </div>

</div>

@endsection