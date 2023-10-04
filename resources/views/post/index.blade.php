<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <a href="{{route('create')}}" class="btn btn-outline-info" >Add Post</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">body</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
        <tr>
            <th scope="row">{{ $post ->id }}</th>
            <td>{{$post ->title}}</td>
            <td>{{$post ->body}}</td>
            <td>
                <a href="{{ route('update', $post ->id) }}" class="btn btn-success" >Update</a>
                <a href="{{ route('delete', $post ->id) }}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        @endforeach

        </tbody>
      </table>
</body>
</html>
