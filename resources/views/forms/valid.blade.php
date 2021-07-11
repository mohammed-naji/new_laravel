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

        {{-- @dump($errors->all()) --}}

        {{-- @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
        @endif --}}


        <h1>Form Validation</h1>
        <form action="{{ route('validSubmit') }}" method="post">
            @csrf
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
            <div class="mb-4">
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name">
                @error('name')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-4">
                <input type="text" class="form-control @error('age') is-invalid @enderror" name="age" placeholder="Age">
                @error('age')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-4">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email">
                @error('email')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-4">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" autocomplete="new-password">
                @error('password')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-4">
                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Confirm Password" autocomplete="new-password">
            </div>
            <input type="submit" value="Send" class="btn btn-success px-5">
        </form>
    </div>

</body>
</html>
