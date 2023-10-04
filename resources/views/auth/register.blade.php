<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form action="{{ route('register.store') }}" method="post">
        @csrf
    <label>name:</label>
    <input type="text" name="name">
    @error('name')
    <div class="alert alert-danger">
    {{ $message }}
    </div>
    @enderror
    <label>password:</label>
    <input type="password" name="password">
    @error('password')
    <div class="alert alert-danger">
    {{ $message }}
    </div>
    @enderror
    <label>email:</label>
    <input type="email" name="email">
    @error('email')
    <div class="alert alert-danger">
    {{ $message }}
    </div>
    @enderror
    <label>phone:</label>
    <input type="text" name="phone">
    @error('phone')
    <div class="alert alert-danger">
    {{ $message }}
    </div>
    @enderror
    <button class="btn btn-warning" >Register</button>
    </form>
</body>
</html>
