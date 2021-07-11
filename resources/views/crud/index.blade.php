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
    <h1 class="">All Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Add New Post</a>
  </div>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Content</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($posts as $post)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $post->title }}</td>
        <td>{{ $post->content }}</td>
        <td>
            <a href="" class="btn btn-info btn-sm">Edit</a>
            <a href="" class="btn btn-danger btn-sm">Delete</a>
        </td>
    </tr>
  @endforeach
    
    
  </tbody>
</table>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>