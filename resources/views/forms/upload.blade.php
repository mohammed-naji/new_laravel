<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="icon" href="https://placekitten.com/80">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>



    <div class="container my-5">
        <h1>Upload files</h1>
        <form action="{{ route('uploadSubmit') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <input type="file" class="form-control" name="image">
            </div>
            <input type="submit" value="Upload" class="btn btn-success px-5">
        </form>
    </div>

</body>
</html>
