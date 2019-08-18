@extends('layouts.app')

@section('content')
<form action="{{ route('store_blog_path') }}" method="POST" enctype="multipart/form-data">

	@csrf

	<div class="form-group">
		<label for="title ">Title</label>
		<input type="text" name="title">
	</div>

	<div class="form-group">
		<label for="Content ">Content</label>
		<textarea name="content" rows="10" class="form-control"></textarea>
	</div>

	<div class="form-group">
		<input type="file" name="files" class="form-control">
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-outline-primary">Add Blog Post</button>
		
	</div>
	
</form>

@endsection