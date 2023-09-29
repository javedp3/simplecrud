
@extends('products.html')

@section('content')


    

    
<div class="container mt-3 card">
    <h1>create a post</h1>
   
    <form action="{{route('product.update',$product->id)}}" method="post">
        @csrf
        @method('PUT')
      <div class="mb-3 mt-3">
        <label for="name">Name</label>
        <input type="text" class="form-control"   name="name" value="{{$product->name}}">
      </div>
      <div class="mb-3">
        <label for="qty">Quentity</label>
        <input type="text" class="form-control"   name="qty" value="{{$product->qty}}">
      </div>
      <div class="mb-3">
        <label for="prize">Prize</label>
        <input type="text" class="form-control"   name="prize" value="{{$product->prize}}">
      </div>
       <div class="mb-3">
        <label for="description">Description</label>
       <textarea name="description"  cols="30" >{{$product->description}}</textarea>
      </div>
      {{-- <input type="submit" class="btn btn-primary" value="Submit"> --}}
      <button type="submit" class="btn btn-outline-success">Update</button>
    </form>
  </div>
  
  @endsection