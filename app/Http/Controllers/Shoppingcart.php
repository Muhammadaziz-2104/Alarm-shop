<?php

namespace App\Http\Controllers;

//use Livewire\Component;
use App\Models\Order;
use App\Models\Shoppingcart as Cart;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class Shoppingcart extends Controller
{
    public $cartitems, $sub_total = 0, $total = 0, $tax = 0;

    public function render()
    {
        if (auth()->user()) {
        $this->cartitems = Cart::with('product')
        ->where('user_id', auth()->user()->id)
        ->where('status', '!=', Cart::STATUS['success'])
        ->whereNull('payment_id')
        ->get();
        $this->total = 0;$this->sub_total = 0; $this->tax = 0;
        }else {
            return redirect(route('login'));
        }

        // dd($this->cartitems->count());
        foreach($this->cartitems as $item){
            $this->sub_total += $item->product->regular_price * $item->quantity;
            // dd($item->quantity);
        }
        $this->total = $this->sub_total - $this->tax;

        // dd($this->cartitems->quantity);

        return view('products.card',[
            'cartitems'=>$this->cartitems,
            'sub_total'=>$this->sub_total,
            'total'=>$this->total,
            'tax'=>$this->tax,

        ]);
    }

    public function incrementQty($product){
        $cart = Cart::whereId($product)->first();
        $cart->quantity += 1;
//        dd($cart);

        $cart->save();

        session()->flash('success', 'Product quantity updated !!!');
        return redirect('card');
    }

    public function decrementQty($product){
        $cart = Cart::whereId($product)->first();
//        dd($cart);
        if($cart->quantity > 1){
            $cart->quantity -= 1;
            $cart->save();
            session()->flash('success', 'Product quantity updated !!!');
        }else{
            session()->flash('info','You cannot have less than 1 quantity');
        }
        return redirect('card');
    }

    public function removeItem($product){
        $cart = Cart::whereId($product)->first();

        if($cart){
            $cart->delete();
//            $this->emit('updateCartCount');
        }
        session()->flash('success', 'Product removed from cart !!!');
        return redirect('card');
    }

    /**
     * @throws \Throwable
     */
//    public function checkout(){
////        dd('dedemdiemde');
//        $provider = new PayPalClient([]);
//        $token = $provider->getAccessToken();
//        $provider->setAccessToken($token);
//
//        $order = $provider->createOrder([
//            "intent" => "CAPTURE",
//            "purchase_units" => [
//                [
//                    "amount" => [
//                        "currency_code" => 'USD',
//                        'value'  => $this->total
//                    ]
//                ]
//            ],
//            'application_context' => [
//                'cancel_url' => route('payment.cancel'),
//                'return_url' => route('payment.success')
//            ]
//
//        ]);
//
//        if($order['status'] == 'CREATED'){
//            foreach($this->cartitems as $item){
//                $item->status = Cart::STATUS['in_process'];
//                $item->payment_id = $order['id'];
//                $item->save();
//            }
//            return redirect($order['links'][1]['href']);
//        }
//        session()->flash('error','Something went wrong, Please Try again');
//    }

    public function checkout()
    {
        return view('checkout');
    }

    public function session(Request $request)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $productname = $request->get('productname');
        $totalprice = $request->get('total');
        $two0 = "00";
        $total = "$totalprice$two0";

        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'USD',
                        'product_data' => [
                            "name" => $productname,
                        ],
                        'unit_amount'  => $total,
                    ],
                    'quantity'   => 1,
                ],

            ],
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('checkout'),
        ]);

        return redirect()->away($session->url);
    }

    public function success()
    {
        $this->cartitems = Cart::with('product')
        ->where(['user_id'=>auth()->user()->id])
        ->where('status', '!=', Cart::STATUS['success'])
        ->get();
        foreach($this->cartitems as $item) {
            // dd($item->payment_id);
            $order = Order::create([
                'shoppingcart_id' =>$item->id,
                'payment_id' => 1,
                'order_status' => 1,
                'amount' => $item->quantity,
            ]);
        }
        Cart::whereNull('payment_id')->update(['payment_id' => 1]);
        return view('success');
    }

}
