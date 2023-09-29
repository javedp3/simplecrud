<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products=Product::latest()->paginate(5);
        //$product=Product::latest()->get();
        return view('products.index',compact('products'));
    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
       // dd($request->name);
        $data =$request->validate([
            'name'=>'required',
            'qty'=>'required|numeric',
            'prize'=>'required|decimal:0,4',
            'description'=>'nullable'
        ]);

        $newproduct=Product::create($data);
        $newproduct->save();
        \RealRashid\SweetAlert\Facades\Alert::success('product created successfully ...');

        return redirect(route('product.index'));

    }
    public function edit($id){
        $product=Product::findorFail($id);
        return view('products.edit',compact('product'));
        
    }
    public function update(Request $request , $id ){
        $product =$request->validate([
            'name'=>'required',
            'qty'=>'required|numeric',
            'prize'=>'required|decimal:0,4',
            'description'=>'nullable'
        ]);
        $product=Product::where('id',$id)->first();
        $product->name=$request->name;
        $product->qty=$request->qty;
        $product->prize=$request->prize;
        $product->description=$request->description;
        $product->save();
        \RealRashid\SweetAlert\Facades\Alert::success('product updated successfully ...');

        return redirect('/');
    }
    public function delete($id){
        $product=Product::where('id',$id)->first();
        $product->delete();
        \RealRashid\SweetAlert\Facades\Alert::success('product deleted successfully ...');

        return redirect()->back();
    }
    public function show($id)
    {  
        $product=Product::find($id);
         return view('products.show', compact('product'));
    }

    
}
