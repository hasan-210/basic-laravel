<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="" method="post">
        @csrf
        <label>email:</label>
    <input type="email" name="email">
    @error('email')
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
    <button class="btn btn-info" >Login</button>
    </form>
    <br>
    <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
</body>
</html>
