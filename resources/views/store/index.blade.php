@extends('layout.layout')
@section('content')
    <a href="{{ route('store.create') }}" class="btn btn-outline-info" >Add store</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">category</th>
            <th scope="col">address</th>
            <th scope="col">image</th>


            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($stores as $store)
        <tr>
            <th scope="row">{{ $store ->id }}</th>
            <td>{{$store ->name}}</td>
            <td>{{$store ->category}}</td>
            <td>{{$store ->address}}</td>
            <td>
                <img src="{{asset('storage/image/'.$store->image)}}" width="75px" heihgt="75px"alt="error">
            </td>


            <td>
                <a href="{{ route('store.edit',$store->id) }}" class="btn btn-success" >Update</a>
                <form action="{{ route('store.destroy',$store->id) }}" method="post">
                    @csrf
                    @method('DELETE')

               <button class="btn btn-danger">Delete</button></form>
            </td>
          </tr>
        @endforeach

        </tbody>
      </table>
    @endsection

