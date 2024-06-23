<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Auth;
use Spatie\Backtrace\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_book = Product::orderBy('created_at','desc')->paginate(10);
        return view('admin.books.index', ['books'=>$all_book]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.add',['categorys' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $text = explode(',',$request['text']);
        $images=array();
        foreach ($request->file('photo') as $photo){
            $name=$photo->getClientOriginalName();
            $photo->move('storage/products',$name);
            $images[]=$name;
        }

        $product = new Product();
        $product->category_id = $request['category'];
        $product->name = $request['title'];
        $product->text = json_encode($text);
        $product->photo = json_encode($images);
        $product->status = $request['status'];

        $product->save();

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.products.show',['products'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.products.update',['products'=>$product,'categorys' => Category::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $products=Product::find($product);
        $images=array();
        foreach ($request->file('photo') as $photo){
            $name=$photo->getClientOriginalName();
            $photo->move('storage/products',$name);
            $images[]=$name;
        }
        $text = explode(',',$request['text']);
        $update=Product::where('id',$product)->update([
            'category_id' => $request['category'],
            'name' => $request['name'],
            'text' =>json_encode($text),
            'photo' => json_encode($images),
            'status' => $request['status']
        ]);

        foreach (json_decode($products->photo) as $photo){
            File::delete(public_path('storage/products/'.$photo));
        }

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product = Product::first($product);
        foreach (json_decode($product->photo) as $photo){
            File::delete(public_path('storage/products/'.$photo));
        }

        $product->delete();
        return redirect()->route('products.index');
    }
}
