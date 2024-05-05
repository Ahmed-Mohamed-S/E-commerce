@extends('Layouts.master')

@section('content')



<div class="single-product mt-150 mb-150">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Details of</span> Products</h3>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-5">
                <div class="single-product-img">
                    <img src="{{asset($product->imagepath)}}" alt="">
                </div>
            </div>
            <div class="col-md-7">
                <div class="single-product-content">
                    <h3>{{$product->name}}</h3>
                    <p>قسم : {{$product->category->name}}</p>

                    <p class="single-product-pricing"><span>الكمية : {{$product->quantity}}</span>سعر القطعة الواحدة :  ${{$product->price}}</p>
                    <p>{{$product->description}}</p>
                    <div class="single-product-form">
                        <form action="index.html">
                            <input type="number" placeholder="0">
                        </form>
                        <a href="{{url('/addproducttocart',['id'=>$product->id])}}" class="cart-btn"><i class="fas fa-shopping-cart"></i> {{__('string.add to cart')}}</a>

                    </div>




                </div>
            </div>
        </div>
    </div>

<div class="testimonail-section mt-80 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="testimonial-sliders">
                    @foreach ( $product->images as $item )
                    <div class="single-testimonial-slider">
                        <div class="client-avater">
                            {{-- <img style="width:40%; height:300px; max-width:none !important; border-radius:20px !important;" src="{{asset($item->imagepath)}}" alt="" style="height: 150px,width: 150px;"> --}}
                            <img style="height: 200px;width: 200px; max-width:none !important; border-radius:20px !important;" src="{{asset($item->imagepath)}}" alt="">


                        </div>
                        <div class="client-meta">
                            <p class="testimonial-body">
                            </p>
                            <div class="last-icon">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>


</div>
<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
            <div class="section-title">
                <h3><span class="orange-text">Related</span> Products</h3>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($relatedproduct as $item)
            <div class="col-lg-4 col-md-6">
                <div class="single-product-item text-center">
                    <div class="product-image">
                        <a href="/single-product/{{$item->id}}">
                            <img src="{{url($item->imagepath)}}"
                                 style="max-height: 250px !important; min-height: 250px !important"
                                 alt="">
                        </a>
                    </div>
                    <h3>{{$item->name}}</h3>
                    <p>{{$item->description}}</p>
                    <p class="product-price"><span>{{$item->quantity}}</span> {{$item->price}} $</p>
                  
                        <a href="{{url('/addproducttocart',['id'=>$item->id])}}" class="cart-btn">
                            <i class="fas fa-shopping-cart"></i> {{__('string.add to cart')}}
                        </a>

                </div>
            </div>
        @endforeach
    </div>
</div>


</div>


@endsection
