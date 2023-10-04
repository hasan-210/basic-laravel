<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <h2>update store</H2>
    <form action="{{ route('store.update',$store->id) }}" method="post"enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="">title</label>
        <input class="form-control" type="text" value="{{ $store->name }}" name="name">
        @error('name')
        <div class="alert alert-danger">
           {{ $message }}
        </div>
        @enderror
        <label for="">category</label>
        <input class="form-control" type="text" value="{{ $store->category }}" name="category">
        @error('category')
        <div class="alert alert-danger">
           {{ $message }}
        </div>
        @enderror
         <label for="">address</label>
        <input class="form-control" type="text" value="{{ $store->address}}" name="address">
        @error('address')
        <div class="alert alert-danger">
           {{ $message }}
        </div>
        @enderror
        <label for="">image</label>
        <input class="form-control" type="file"  name="image">
        @error('image')
        <div class="alert alert-danger">
           {{ $message }}
        </div>
        @enderror
        @if($store ->image)
        <img src="{{asset('storage/image/'.$store->image)}}" width="75px" heihgt="75px"alt="error">
        @else
        <p> no image </p>
        @endif
         <button class="btn btn-primary" > Update </button>
    </form>
</body>
</html>
