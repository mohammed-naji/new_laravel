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
    <h1 class="">All Authors</h1>
    <a href="{{ route('authors.create') }}" class="btn btn-primary">Add New Author</a>
  </div>
    <style>

tbody, td, tfoot, th, thead, tr {
    vertical-align: middle
}
    </style>

@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

@if (session('error'))
<div class="alert alert-danger">{{ session('error') }}</div>
@endif

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @forelse ($authors as $author)
      <tr>
        <th scope="row">{{ $author->id }}</th>
        <td>{{ $author->name }}</td>
        <td>
            <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-info btn-sm">Edit</a>
            <form action="{{ route('authors.destroy', $author->id) }}" method="POST" class="d-inline">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-sm" onclick="return confirm('هل انت متأكد اخوي ؟؟؟')">Delete</button>
            </form>

        </td>
    </tr>

    @empty
        <tr>
            <td colspan="3">There is no data found</td>
        </tr>
  @endforelse

  </tbody>
</table>
{{ $authors->links() }}
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
