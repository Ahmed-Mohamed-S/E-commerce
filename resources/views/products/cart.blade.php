<title>{{__('string.cart')}}</title>
@extends('layouts.master')
@section('content')
<!-- cart -->
<div class="cart-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="cart-table-wrap">
                    <table class="cart-table">
                        <thead class="cart-table-head">
                            <tr class="table-head-row">
                                <th class="product-remove"></th>
                                <th class="product-image">Product Image</th>
                                <th class="product-name">Name</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-total">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($cartproducts as $item)
                                 @php
                                 $product = App\Models\Product::find($item->product_id);
                                 @endphp

                               <tr class="table-body-row">
                                <td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
                                <td class="product-image"><img src="{{$product->imagepath}}" alt=""></td>
                                <td class="product-name">{{$product->name}}</td>
                                <td class="product-price">{{$product->price}}</td>
                                <td class="product-quantity">{{$item->quantity}}</td>
                               <td class="product-total">{{$item->quantity * $product->price}}</td>
                               </tr>
                            @endforeach --}}
                            <?php $totalPrice = 0; ?>

                         @foreach ($cartproducts as $item)

                            <tr class="table-body-row">
                                <td class="product-remove"><a href="removePro/{{$item->id}}"><i class="far fa-window-close"></i></a></td>
                                <td class="product-image"><img src="{{asset($item->product->imagepath)}}" alt=""></td>
                                <td class="product-name"><a href="single-product/{{$item->product->id}}">{{$item->product->name}}</td>
                                <td class="product-price">{{$item->product->price}}</td>
                                <td class="product-quantity">{{$item->quantity}}</td>
                                <td class="product-total">{{$item->quantity * $item->product->price}} $</td>
                                <?php $totalPrice +=$item->quantity * $item->product->price; ?>
                            </tr>
                         @endforeach


                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="total-section">
                    <table class="total-table">
                        <thead class="total-table-head">
                            <tr class="table-total-row">
                                <th>Total</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- <tr class="total-data">
                                <td><strong>Subtotal: </strong></td>
                                <td>$500</td>
                            </tr> --}}
                            <tr class="total-data">
                                <td><strong>Shipping: </strong></td>
                                <td>$15</td>
                            </tr>




                            <tr class="total-data">
                                <td><strong>Total: </strong></td>
                                <td>{{ $totalPrice + 45 }}$</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="cart-buttons">
                        {{-- <a href="cart.html" class="boxed-btn">Update Cart</a> --}}
                        <a href="/compeleteorder" class="boxed-btn black">Check Out</a>
                        <a href="/previousorder" class="boxed-btn black">Previous Orders</a>

                    </div>
                </div>

                {{-- <div class="coupon-section">
                    <h3>Apply Coupon</h3>
                    <div class="coupon-form-wrap">
                        <form action="index.html">
                            <p><input type="text" placeholder="Coupon"></p>
                            <p><input type="submit" value="Apply"></p>
                        </form>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<!-- end cart -->
@endsection
