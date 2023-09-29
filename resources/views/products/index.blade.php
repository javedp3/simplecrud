
@extends('products.html')

@section('content')

<div class="container">
    
<div class="row text-center float-right">

<h1>laravel simple crup opration</h1>

<a href="/create" class="btn btn-block btn-outline-success">Add product</a>

<table class="table table-hover table-bordered border-primary mt-2">
    <thead>
      <tr>
        <th scope="col">Sr No</th>
        <th scope="col">Name</th>
        <th scope="col">qty</th>
        <th scope="col">prize</th>
        <th scope="col">description</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
        <th scope="col">show</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $product )
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->name}}</td>
            <td>{{$product->qty}}</td>
            <td>{{$product->prize}}</td>
            <td>{{$product->description}}</td>
            <td>
                <a href="{{route('product.edit',$product->id)}}" class="btn btn-outline-success">Edit</a>
               
            </td>
            <td>
             
                <a href="{{route('product.delete',$product->id)}}" class="btn btn-outline-success">Delete</a>
            </td>
            <td>
              <a href="{{ route('product.show',$product->id) }}" class="btn btn-outline-success">Show</a>

            </td>
          </tr>
        @endforeach
     
      
    </tbody>
  </table>
 <div class="mt-2">
  {{ $products->links() }}
 </div>
</div>
</div>
@endsection