<?php


namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Shoppingcart;

class Productlist extends Controller
{
    public $products;

    public function render()
    {
        $this->products = Product::get();

        return view('livewire.productlist');
    }

    public function addToCart($product){
//        $productId = Product::whereId($product)->first();
//        dd($productId);
        if(auth()->user()){
            // add to cart
            $data = [
                'user_id' => auth()->user()->id,
                'product_id' => $product,
            ];
            Shoppingcart::updateOrCreate($data);

//            $this->emit('updateCartCount');

            session()->flash('success','Product added to the cart successfully');
        }else{
            // redirect to login page
            return redirect(route('login'));
        }
        return redirect('card');
    }
}

