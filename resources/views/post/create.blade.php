<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADD POST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <H2>add post</H2>
    <form action="{{route('store')}}" method="post">
        @csrf
        <label for="">title</label>
        <input class="form-control" type="text" name="title" value="{{ old('title') }}">
        @error('title')
        <div class="alert alert-danger">
           {{ $message }}
        </div>
        @enderror
        <label for="">body</label>
        <input class="form-control" type="text" name="body" value="{{ old('body') }}">
        @error('body')
        <div class="alert alert-danger">
           {{ $message }}
        </div>
        @enderror
         <button class="btn btn-primary" > Save </button>
    </form>
</body>
</html>
