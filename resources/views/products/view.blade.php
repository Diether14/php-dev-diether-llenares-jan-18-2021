@extends('layouts.app')
@section('content')
    <h3>Add Product</h3>
    <table class="table table-sm border-0">
      <tbody>
        <tr>
          <th scope="row">Name:</th>
          <td>{{$product->name}}</td>
        </tr>
        <tr>
          <th scope="row">Stock:</th>
          <td>{{$product->stock}}</td>
        </tr>
        <tr>
          <th scope="row">Price:</th>
          <td>{{$product->price}}</td>
        </tr>
      </tbody>
    </table>
@endsection
