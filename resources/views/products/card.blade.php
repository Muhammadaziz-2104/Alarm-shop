@extends('layouts.main')

@section('title', 'StudyLab')

@section('content')
    <div class="content-wrapper">

        <div class="breadcrumb-wrap bg-f br-2">
            <div class="overlay bg-russian op-8"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-title">
                            <h2>Cart</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="index.html">Home</a></li>
                                <li>Cart</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="cart-wrap ptb-100">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-xl-12">
                        <div class="row">

                            @if($cartitems->isEmpty())
                                <h1>
                                    You haven't bought anything yet.
                                    <a class="content-title style1" href="{{route('shop')}}"><span>Continue shop</span></a>
                                </h1>

                            @else
                            <div class="col-md-12">
                                <div class="cart-table ">
{{--                                    @dd($product)--}}
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">Items</th>
                                            <th scope="col">Unit Price</th>
                                            <th scope="col">Qunatity</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Remove</th>
                                        </tr>
                                        </thead>
                                        <tbody>



                                        @foreach($cartitems as $item)
                                            <tr>
                                                <td class="hidden pb-4 md:table-cell">
                                                    <a class="cart-item" href="#">
                                                        <img src="{{Voyager::image( $item->product->image )}}" class="w-20 rounded" alt="Thumbnail" />
                                                        <span>{{ $item->product->name }}</span>
                                                    </a>
                                                </td>
                                                <td class="hidden text-right md:table-cell">
                                                    <span class="cart-item-price ">
                                                        {{ $item->product->regular_price }}$
                                                    </span>
                                                </td>

                                                <td class="justify-center md:justify-end md:flex mt-6">
                                                    <div class="cart-qty">
                                                        <div class="product-quantity">
                                                            <div class="qtySelector">
                                                                <a href="{{route('decrementQty',['product'=>$item->id])}}">
                                                                    <span class="decreaseQty"><i class="flaticon-minus "></i></span>
                                                                </a>
{{--@dd( $item->quantity)--}}
                                                                <input type="text" class="qtyValue" value="{{ $item->quantity}}" />

                                                                <a href="{{route('incrementQty',['product'=>$item->id])}}">
                                                                  <span class="increaseQty"><i class="flaticon-add-plus-button "></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="text-right">
                                                    <p class="cart-item-price">
                                                        {{ $item->product->regular_price * $item->quantity }}$
                                                    </p>
                                                </td>
                                                <td>
                                                    <a class="cart-action" href="{{route('removeItem',['product'=>$item->id])}}">
                                                        <i class="flaticon-rubbish"></i>
                                                    </a>
{{--                                                    <button class="cart-action" type="button" wire:click="removeItem({{ $item->id }})">--}}
{{--                                                        <i class="flaticon-rubbish"></i>--}}
{{--                                                    </button>--}}
                                                </td>
                                            </tr>
                                        @endforeach

{{--                                        <tr>--}}
{{--                                            <td><a class="cart-item" href="shop-details.html">--}}
{{--                                                    <img src="assets/img/shop/product-thumb-3.png" alt="Image">--}}
{{--                                                    <span>Night Vission Camera</span>--}}
{{--                                                </a></td>--}}
{{--                                            <td>--}}
{{--                                                <p class="cart-item-price">$240.00</p>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <div class="cart-qty">--}}
{{--                                                    <div class="product-quantity">--}}
{{--                                                        <div class="qtySelector">--}}
{{--                                                            <span class="decreaseQty"><i class="flaticon-minus "></i></span>--}}
{{--                                                            <input type="text" class="qtyValue" value="1" />--}}
{{--                                                            <span class="increaseQty"><i class="flaticon-add-plus-button "></i></span>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <p class="cart-item-price">$240.00</p>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <button class="cart-action" type="button">--}}
{{--                                                    <i class="flaticon-rubbish"></i>--}}
{{--                                                </button>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-5 col-md-6 col-sm-8 mb-25">--}}
{{--                                <div class="coupon-code">--}}
{{--                                    <input type="text" placeholder="Coupon Code">--}}
{{--                                    <button type="button">Apply Coupon</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-7 col-md-6 col-sm-4 text-sm-end mb-25">--}}
{{--                                <button class="btn style4" type="button">Update Cart</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="row">
                            <div class="col-xl-6 offset-xl-3">
                                <div class="cart-total bg-albastor">
                                    <h3 class="cart-box-title">Cart Totals</h3>
                                    <div class="cart-total-item">
                                        <p>Subtotal</p>
                                        <span> {{ $sub_total }}$</span>
                                    </div>
                                    <div class="cart-total-item">
                                        <p>Discount</p>
                                        <span> {{ $tax }}$</span>
                                    </div>
                                    <div class="cart-total-item">
                                        <p>Total</p>
                                        <span>{{ $total }}</span>
                                    </div>

{{--                                    <form action="{{ route('pay.initiate') }}" method="POST">--}}
{{--                                        @csrf--}}
{{--                                        <label for="amount">Amount:</label>--}}
{{--                                        <input type="number" name="amount" id="amount" required>--}}
{{--                                        <button type="submit">Pay Now</button>--}}
{{--                                    </form>--}}
{{--                                    <a href="{{route('checkout') }}}" class="btn style3 d-block w-100">Proceed To Checkout <i class="flaticon-right-arrow-1"></i></a>--}}
{{--                                    @php--}}
{{--//                                    dd($cartitems)--}}
{{--                                    --}}
{{--                                        // Assuming $cartitems is passed to the view and is an array of objects or associative arrays--}}
{{--//                                        $productNames = array_map(function($item) {--}}
{{--//                                            $product = \App\Models\Product::find($item['product_id']); // Fetch the product by ID--}}
{{--//                                            return $product->name; // Get the product name--}}
{{--//                                        }, $cartitems);--}}

{{--//                                        dd($productNames); // Dump and die to see the product names--}}
{{--                                    @endphp--}}
                                    <form action="/session" method="POST" class="d-flex justify-content-around">
                                            <a href="{{ route('shop') }}" class="btn btn-danger btn style4"> <i class="fa fa-arrow-left"></i> Continue Shopping</a>
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <input type='hidden' name="total" value="{{$total}}">
                                            <input type='hidden' name="productname" value="{{$cartitems[0]->product->name}}">
                                            <button class="btn style4" type="submit" id="checkout-live-button"><i class="fa fa-money"></i> Checkout</button>
                                        </form>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="container">
        <div class="newsleter-wrap style3">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="content-title style1">
                        <h2>Subscribe To Our Newsletter
                        </h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="#" class="newsletter-form">
                        <input type="email" placeholder="Your Email Address*">
                        <button type="submit">Subscribe <i class="flaticon-right-arrow"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
