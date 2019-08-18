<!DOCTYPE html>
<html lang="" dir="ltr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>BlogWithLaravel</title>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-md-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('blogs_path')}}">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
      <a href="{{route('create_blogs_paths') }}" class="nav-link">Create Blog</a> 
      </li>
     
    </ul>
      </div>
</nav>
	<div class="container">

		@yield('content')
		
	</div>

	

</body>
</html>