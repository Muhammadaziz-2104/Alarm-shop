@extends('layouts.app')
@section('content')

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">products I choose</h4>
{{--                <p class="card-description">--}}
{{--                    Add class <code>.table-striped</code>--}}
{{--                </p>--}}
{{--                @dd($products)--}}
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>
                                Image
                            </th>
                            <th>
                               Name
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                                Quantity
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            {{-- @dd($products) --}}
                        @foreach($products as $item)
                            <tr>
{{--                                @dd($product->product())--}}
                            <td class="py-1">
                                <img src="{{Voyager::image( $item->shoppingcart->product->image )}}" style="width: 75px;height: 65px"/>
                            </td>
                            <td>
                                {{$item->shoppingcart->product->name}}
                            </td>
{{--                            <td>--}}
{{--                                <div class="progress">--}}
{{--                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                </div>--}}
{{--                            </td>--}}
                            <td>
                                $ {{$item->shoppingcart->product->regular_price * $item->amount}}
                            </td>
                            <td>
                                {{$item->amount}}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a href="{{route('card')}}" class="mt-4 btn btn-success btn-rounded btn-fw">Formalization</a>

                </div>
            </div>
        </div>
    </div>

@endsection
