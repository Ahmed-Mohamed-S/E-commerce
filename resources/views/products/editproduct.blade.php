<title>صفحة تعديل المنتجات</title>
@extends('Layouts.master')

@section('content')

<div class="text-center mt-5 ml-5"> <!-- ml-3 for margin-left of 3 units -->
    <div class="m-50">
        {!! $barcodeImage !!}
    </div>
</div>




<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Edit</span> Products</h3>
                    <div class="qr-code-container">
                        <img src="data:image/svg+xml;base64,{{ base64_encode($qrCode) }}" alt="QR Code">
                    </div>

                    {{-- <hr class="separator"> --}}


                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 mb-5 mb-lg-0">
                <div class="form-title">
                </div>
                 <div id="form_status"></div>
                <div class="contact-form">

                    <form method="POST" enctype="multipart/form-data" action="{{url('storeproduct')}}" id="fruitkha-contact" onSubmit="return valid_datas( this );" style="text-align: right" dir="rtl">
                        @csrf()
                        @method('post')
                        <p>
                            <input type="hidden" required    style="width: 100%"  placeholder="" name="id" id="id" value="{{ $product ? $product->id : '' }}">

                            <input type="text" required    style="width: 100%"  placeholder="الاسم" name="name" id="name" value="{{ $product ? $product->name : '' }}">
                            <span class="text-danger">
                                @error('name')
                                {{$message}}

                                @enderror
                            </span>
                        </p>
                        <p style="display: flex;" >
                            <input type="number" required  style="width: 50%"  class="ml-4" placeholder="السعر" name="price" id="price" value="{{$product ? $product->price : ''}}">
                            <span class="text-danger">
                                @error('price')
                                {{$message}}

                                @enderror
                            </span>
                            <input type="number" required   style="width: 50%"  placeholder="الكمية" name="quantity" id="quantity" value="{{$product ? $product->quantity : ''}}">
                            <span class="text-danger">
                                @error('quantity')
                                {{$message}}

                                @enderror
                            </span>
                        </p>
                        <p><textarea name="description" required  id="description"  cols="30" rows="10"  placeholder="الوصف">{{$product ? $product->description : ''}} </textarea></p>
                        <span class="text-danger">
                            @error('description')
                            {{$message}}

                            @enderror
                        </span>
                        <p>
                        <select class="form-control" required name="category_id" id="category_id">
                            @foreach ( $AllCategories as $item)
                            @if (isset($product) && $item->id == $product->category_id)
                            <option value="{{$item-> id}}" selected> {{$item-> name}}</option>
                            @else
                            <option value="{{$item-> id}}"> {{$item-> name}}</option>


                            @endif

                            @endforeach
                        </select>
                        <span class="text-danger">
                            @error('category_id')
                            {{$message}}

                            @enderror
                        </span>
                        </p>
                        <p>
                            <input type="file" class="form-control" name="photo" id="photo">
                            <span class="text-danger">
                                @error('photo')
                                {{$message}}

                                @enderror
                            </span>
                        </p>
                        <p>
                            <img src="{{asset($product-> imagepath)}}" width="200" height="200">

                        </p>
                        <p><input type="submit" value="حفظ"></p>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection
