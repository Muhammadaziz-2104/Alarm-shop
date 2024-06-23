<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Shoppingcart;

use Illuminate\Support\Facades\Auth;

use function Symfony\Component\Mime\Header\all;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function index()
     {
        return view('index');
     }

    public function profile()
    {
        $shoppingcart = Shoppingcart::where('user_id','=',Auth::user()->id)->get();
        return view('users.home', [
            'shoppingcart' => $shoppingcart
        ]);
    }

    // public function product(){
    //     $products = Shoppingcart::where('user_id','=',Auth::user()->id)->get();
    //     return view('users.orders',['products'=>$products]);
    // }
}
