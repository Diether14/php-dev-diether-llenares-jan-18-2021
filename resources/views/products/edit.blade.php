@extends('layouts.app')
@section('content')
    <h3>Add Product</h3>
    <form action="{{ route('update', $product->id) }}" method="POST" >
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name">Name</label>
            <input required class="form-control" type="text" name="name" id="name" value="{{ $product->name }}">
        </div>
        <div class="mb-3">
            <label for="stock">Stock</label>
            <input required class="form-control" type="number" name="stock" id="stock" value="{{ $product->stock }}">
        </div>
        <div class="mb-3">
          <label for="price">Price</label>
          <input required class="form-control" type="number" name="price" id="price" value="{{ $product->price }}">
      </div>
      <div class="text-right">
        <button class="btn btn-sm btn-success" type="submit">Save</button>
      </div>
    </form>
@endsection
