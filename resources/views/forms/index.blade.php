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
        <h1>Send data using Form</h1>
        <form action="{{ route('submitData') }}" method="post">
            @csrf
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
            <div class="mb-4">
                <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="mb-4">
                <input type="text" class="form-control" name="age" placeholder="Age">
            </div>

            <div class="mb-4">
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>

            <div class="mb-4">
                <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="new-password">
            </div>
            <input type="submit" value="Send" class="btn btn-success px-5">
        </form>
    </div>

</body>
</html>
