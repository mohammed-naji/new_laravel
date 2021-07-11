<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Posts</title>
  </head>
  <body>
  
  <div class="container my-5">
  <div class="d-flex mb-4 justify-content-between align-items-center">
    <h1 class="">Add new post</h1>
    <a href="{{ route('posts.index') }}" class="btn btn-primary">Return Back</a>
  </div>


  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
      </ul>
      </div>
      
  @endif


  <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <input type="text" placeholder="Title" class="form-control" name="title" />
    </div>

    <div class="mb-3">
      <input type="file" class="form-control" name="image" />
    </div>

    <div class="mb-3">
      <textarea placeholder="Content" class="form-control" name="content"></textarea>
    </div>

    <button class="btn btn-success w-100">Save</button>

  </form>

  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>