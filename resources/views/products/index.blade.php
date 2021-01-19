@extends('layouts.app')
@section('content')
    
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <h3 class="d-inline">Products</h3>
    <a href="/products/create" class="btn btn-sm btn-success d-inline" role="button">Add</a>

    <table class="table table-sm table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Stocks</th>
            <th scope="col">Price</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->stock}}</td>
                <td>{{$product->price}}</td>
                <td>
                    <form action="{{ route('destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('view', $product->id) }}" class="btn btn-sm btn-primary" role="button">View</a>
                        <a href="{{ route('edit', $product->id) }}" class="btn btn-sm btn-warning" role="button">Edit</a>
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
@endsection