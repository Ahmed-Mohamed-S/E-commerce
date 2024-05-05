<title>{{__('string.product')}}</title>
@extends('Layouts.master')
@section('content')
<div class="row">
    @foreach ($products as $item )
        <div class="col-lg-4 col-md-6 text-center">
            <div class="single-product-item">
                <div class="product-image">
                    <a href="/single-product/{{$item->id}}">
                        <img src="{{url($item->imagepath)}}"
                             style="max-height: 250px !important ;min-height: 250px !important"
                             alt="">
                    </a>
                </div>
                {{-- <h3>{{$item->name}}</h3> --}}
                <h3>{{ session('locale') == 'ar' ? $item->name : $item->nameEn }}</h3>
                <p>{{$item->description}}</p>
                <p class="product-price"><span>{{$item->quantity}}</span> {{$item->price}} $ </p>
                {{-- <a href="addproducttocart/{{$item->id}}" class="cart-btn" > --}}
                    <a href="{{ url('addproducttocart', ['id' => $item->id]) }}" class="cart-btn">


                    <i class="fas fa-shopping-cart"></i> {{__('string.add to cart')}}</a>

                    @if (Auth::user() && (Auth::user()->role == 'admin' || Auth::user()->role == 'salesman'))




                <p class="mt-3">
                <a href="removeproduct/{{$item->id}}" class="btn btn-danger"><i class="fas fa-trash"></i> حذف المنتج</a>
                <a href="editproduct/{{$item->id}}" class="btn btn-primary"><i class="fas fa-edit"></i> تعديل المنتج</a>
                </p>
                @endif



            </div>
        </div>
    @endforeach
<div style="text-align: center; margin: 0px auto;">
    {{$products->links()}}
</div>
</div>
@endsection
<style>
    svg {
        height: 50px !important;
    }
    </style>

