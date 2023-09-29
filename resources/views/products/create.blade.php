
@extends('products.html')

@section('content')


    

    
<div class="container mt-3 card">
    <h1>create a post</h1>
   
    <form action="{{route('product.store')}}" method="post">
        @csrf
        @method('post')
      <div class="mb-3 mt-3">
        <label for="name">Name</label>
        <input type="text" class="form-control"   name="name">
      </div>
      <div class="mb-3">
        <label for="qty">Quentity</label>
        <input type="text" class="form-control"   name="qty">
      </div>
      <div class="mb-3">
        <label for="prize">Prize</label>
        <input type="text" class="form-control"   name="prize">
      </div>
       <div class="mb-3">
        <label for="description">Description</label>
       <textarea name="description"  cols="30" ></textarea>
      </div>
      <input type="submit" class="btn btn-primary" value="Submit">
      
    </form>
  </div>
  
  @endsection