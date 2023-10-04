@extends('layout.layout')
@section('content')
    <H2>add store</H2>
    <form action="{{ route('store.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <label for="">name</label>
        <input class="form-control" type="text" name="name" value="{{ old('name') }}">
        @error('name')
        <div class="alert alert-danger">
           {{ $message }}
        </div>
        @enderror
        <label for="">category</label>
        <input class="form-control" type="text" name="category" value="{{ old('category') }}">
        @error('category')
        <div class="alert alert-danger">
           {{ $message }}
        </div>
        @enderror
        <label for="">address</label>
        <input class="form-control" type="text" name="address" value="{{ old('address') }}">
        @error('address')
        <div class="alert alert-danger">
           {{ $message }}
        </div>
        @enderror
        <label for="">image</label>
        <input class="form-control" type="file" name="image">
        @error('image')
        <div class="alert alert-danger">
           {{ $message }}
        </div>
        @enderror
         <button class="btn btn-primary" > Save </button>
    </form>
@endsection
