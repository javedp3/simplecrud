
@extends('products.html')

@section('content')


    

    
<div class="container mt-3 card">
    <h1>Show Product List</h1>
   
    
      <div class="mb-3 mt-3">
        <label for="name">Name</label>
        <input type="text" class="form-control"    value="{{$product->name}}">
      </div>
      <div class="mb-3">
        <label for="qty">Quentity</label>
        <input type="text" class="form-control"  value="{{$product->qty}}">
      </div>
      <div class="mb-3">
        <label for="prize">Prize</label>
        <input type="text" class="form-control" value="{{$product->prize}}">
      </div>
       <div class="mb-3">
        <label for="description">Description</label>
       <textarea  cols="100" >{{$product->description}}</textarea>
      </div>
      {{-- <input type="submit" class="btn btn-primary" value="Submit"> --}}
      <a href="{{ route('product.index') }}" class="btn btn-primary">Back</button>

    
  @endsection