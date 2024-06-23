@extends('layouts.main')

@section('title', 'StudyLab')

@section('content')
    <div class="content-wrapper">

        <div class="breadcrumb-wrap bg-f br-4">
            <div class="overlay bg-russian op-7"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-title">
                            <h2>Shop Left Sidebar </h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href={{route('login')}}>Home</a></li>
                                <li>Shop</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="shop-wrap ptb-100 bg-selago">
            <div class="container">
                <div class="row gx-5">

                    <div class="col">
                        <div class="row justify-content-center">
                            @foreach($products as $product)
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                    <div class="product-card">
                                        <div class="product-img">
{{--                                            @dd('storage/app/'.$product->image)--}}
{{--                                            <img src="{{url('storage/app/'.$product->image)}}"/>--}}
{{--                                            <img src="assets/img/shop/{{$product->image}}" alt="Image">--}}
                                            {{-- <img src="{{Voyager::image($product->image)}}" alt="Image"> --}}
                                            <img src="{{"storage/$product->image"}}" alt="Image">
                                            <span class="bg-razz">Sold</span>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-info-left">
{{--                                                <a href="{{route('show',['id'=>$product->id])}}">--}}
                                                <h4><a href="{{route('products',['product'=>$product->id])}}}">{{$product->name}}</a></h4>
                                                <span class="product-price">{{$product->price}} {{$product->quantity}}</span>
{{--                                                <span class="ratings">--}}
{{--                                                    <i class="flaticon-star-1"></i>--}}
{{--                                                    5--}}
{{--                                                </span>--}}
                                            </div>
                                            <div class="product-info-right">
{{--                                                <form method="POST" action="">--}}
{{--                                                    @csrf--}}
{{--                                                    @method('POST')--}}
                                                    <a href="{{route('add-card',['product'=>$product->id])}}" class="add-to-cart"><i class="flaticon-shopping-cart-1"></i></a>
{{--                                                </form>--}}
{{--                                                <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500" wire:click="addToCart({{ $product->id }})">--}}
{{--                                                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                                        <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>--}}
{{--                                                    </svg>--}}
{{--                                                </button>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

{{--                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">--}}
{{--                                <div class="products-card">--}}
{{--                                    <div class="products-img">--}}
{{--                                        <img src="assets/img/shop/products-2.jpg" alt="Image">--}}
{{--                                    </div>--}}
{{--                                    <div class="products-info">--}}
{{--                                        <div class="products-info-left">--}}
{{--                                            <h4><a href="shop-details.html">360 Degree Camera</a></h4>--}}
{{--                                            <span class="products-price">$45.00</span>--}}
{{--                                            <span class="ratings">--}}
{{--<i class="flaticon-star-1"></i>--}}
{{--4.5--}}
{{--</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="products-info-right">--}}
{{--                                            <a href="cart.html" class="add-to-cart"><i class="flaticon-shopping-cart-1"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">--}}
{{--                                <div class="products-card">--}}
{{--                                    <div class="products-img">--}}
{{--                                        <img src="assets/img/shop/products-3.png" alt="Image">--}}
{{--                                    </div>--}}
{{--                                    <div class="products-info">--}}
{{--                                        <div class="products-info-left">--}}
{{--                                            <h4><a href="shop-details.html">Face password Lock</a></h4>--}}
{{--                                            <span class="products-price">$20.00</span>--}}
{{--                                            <span class="ratings">--}}
{{--<i class="flaticon-star-1"></i>--}}
{{--5--}}
{{--</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="products-info-right">--}}
{{--                                            <a href="cart.html" class="add-to-cart"><i class="flaticon-shopping-cart-1"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">--}}
{{--                                <div class="products-card">--}}
{{--                                    <div class="products-img">--}}
{{--                                        <img src="assets/img/shop/products-4.png" alt="Image">--}}
{{--                                        <span class="bg-black">New</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="products-info">--}}
{{--                                        <div class="products-info-left">--}}
{{--                                            <h4><a href="shop-details.html">HD Bullet Camera</a></h4>--}}
{{--                                            <span class="products-price">$30.00</span>--}}
{{--                                            <span class="ratings">--}}
{{--<i class="flaticon-star-1"></i>--}}
{{--5--}}
{{--</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="products-info-right">--}}
{{--                                            <a href="cart.html" class="add-to-cart"><i class="flaticon-shopping-cart-1"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">--}}
{{--                                <div class="products-card">--}}
{{--                                    <div class="products-img">--}}
{{--                                        <img src="assets/img/shop/products-5.png" alt="Image">--}}
{{--                                    </div>--}}
{{--                                    <div class="products-info">--}}
{{--                                        <div class="products-info-left">--}}
{{--                                            <h4><a href="shop-details.html">Close Circuit Camera</a></h4>--}}
{{--                                            <span class="products-price">$80.00</span>--}}
{{--                                            <span class="ratings">--}}
{{--<i class="flaticon-star-1"></i>--}}
{{--5--}}
{{--</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="products-info-right">--}}
{{--                                            <a href="cart.html" class="add-to-cart"><i class="flaticon-shopping-cart-1"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">--}}
{{--                                <div class="products-card">--}}
{{--                                    <div class="products-img">--}}
{{--                                        <img src="assets/img/shop/products-6.png" alt="Image">--}}
{{--                                        <span class="bg-razz">New</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="products-info">--}}
{{--                                        <div class="products-info-left">--}}
{{--                                            <h4><a href="shop-details.html">Night Vission Camera</a></h4>--}}
{{--                                            <span class="products-price">$120.00</span>--}}
{{--                                            <span class="ratings">--}}
{{--<i class="flaticon-star-1"></i>--}}
{{--5--}}
{{--</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="products-info-right">--}}
{{--                                            <a href="cart.html" class="add-to-cart"><i class="flaticon-shopping-cart-1"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">--}}
{{--                                <div class="products-card">--}}
{{--                                    <div class="products-img">--}}
{{--                                        <img src="assets/img/shop/products-7.png" alt="Image">--}}
{{--                                        <span class="bg-razz">Sold</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="products-info">--}}
{{--                                        <div class="products-info-left">--}}
{{--                                            <h4><a href="shop-details.html">Card Slot Camera</a></h4>--}}
{{--                                            <span class="products-price">$50.00</span>--}}
{{--                                            <span class="ratings">--}}
{{--<i class="flaticon-star-1"></i>--}}
{{--4.3--}}
{{--</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="products-info-right">--}}
{{--                                            <a href="cart.html" class="add-to-cart"><i class="flaticon-shopping-cart-1"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">--}}
{{--                                <div class="products-card">--}}
{{--                                    <div class="products-img">--}}
{{--                                        <img src="assets/img/shop/products-8.png" alt="Image">--}}
{{--                                        <span class="bg-razz">Sold</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="products-info">--}}
{{--                                        <div class="products-info-left">--}}
{{--                                            <h4><a href="shop-details.html">Gurdian Camera</a></h4>--}}
{{--                                            <span class="products-price">$54.00</span>--}}
{{--                                            <span class="ratings">--}}
{{--<i class="flaticon-star-1"></i>--}}
{{--4.6--}}
{{--</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="products-info-right">--}}
{{--                                            <a href="cart.html" class="add-to-cart"><i class="flaticon-shopping-cart-1"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">--}}
{{--                                <div class="products-card">--}}
{{--                                    <div class="products-img">--}}
{{--                                        <img src="assets/img/shop/products-9.png" alt="Image">--}}
{{--                                    </div>--}}
{{--                                    <div class="products-info">--}}
{{--                                        <div class="products-info-left">--}}
{{--                                            <h4><a href="shop-details.html">DVR Camera</a></h4>--}}
{{--                                            <span class="products-price">$50.00</span>--}}
{{--                                            <span class="ratings">--}}
{{--<i class="flaticon-star-1"></i>--}}
{{--5--}}
{{--</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="products-info-right">--}}
{{--                                            <a href="cart.html" class="add-to-cart"><i class="flaticon-shopping-cart-1"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>

                        <div class="page-navigation">
                            <div class="row">
                                <div class="col-lg-12 ">
                                    {{$products->links("pagination.default")}}
{{--                                    <ul class="page-nav list-style">--}}
{{--                                        <li><a href="shop-right-sidebar.html"><i class="flaticon-left-arrow-3"></i>--}}
{{--                                            </a></li>--}}
{{--                                        <li><a class="active" href="shop-right-sidebar.html">1</a></li>--}}
{{--                                        <li><a href="shop-right-sidebar.html">2</a></li>--}}
{{--                                        <li><a href="shop-right-sidebar.html">3</a></li>--}}
{{--                                        <li><a href="shop-right-sidebar.html"> <i class="flaticon-right-arrow"></i>--}}
{{--                                            </a></li>--}}
{{--                                    </ul>--}}
                                </div>
                            </div>
                        </div>
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
                        <h2>Subscribe To Our Newsletter</h2>
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
