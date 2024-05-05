<title>صفحة اضافة المنتجات</title>
@extends('Layouts.master')

@section('content')




<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Add</span> Products</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 mb-5 mb-lg-0">
                <div class="form-title">
                </div>
                 <div id="form_status"></div>
                <div class="contact-form">

                    <form method="POST" enctype="multipart/form-data" action="storeproduct" id="fruitkha-contact" onSubmit="return valid_datas( this );" style="text-align: right" dir="rtl">
                        @csrf()
                        <p>
                            <input type="text" required    style="width: 100%"  placeholder="الاسم" name="name" id="name" value="{{old('name')}}">
                            <span class="text-danger">
                                @error('name')
                                {{$message}}

                                @enderror
                            </span>
                        </p>
                        <p style="display: flex;" >
                            <input type="number" required  style="width: 50%"  class="ml-4" placeholder="السعر" name="price" id="price" value="{{old('price')}}">
                            <span class="text-danger">
                                @error('price')
                                {{$message}}

                                @enderror
                            </span>
                            <input type="number" required   style="width: 50%"  placeholder="الكمية" name="quantity" id="quantity" value="{{old('quantity')}}">
                            <span class="text-danger">
                                @error('quantity')
                                {{$message}}

                                @enderror
                            </span>
                        </p>
                        <p><textarea name="description" required  id="description"  cols="30" rows="10"  placeholder="الوصف">{{old('description')}} </textarea></p>
                        <span class="text-danger">
                            @error('description')
                            {{$message}}

                            @enderror
                        </span>
                        <p>
                        <select class="form-control" required name="category_id" id="category_id">
                            @foreach ( $AllCategories as $item)
                            <option value="{{$item-> id}}"> {{$item-> name}}</option>

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
                        <p><input type="submit" value="حفظ"></p>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>












{{-- <div class="col-lg-8 mb-5 mb-lg-0">
    <div class="form-title">
        <h2>Have you any question?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, ratione! Laboriosam est, assumenda. Perferendis, quo alias quaerat aliquid. Corporis ipsum minus voluptate? Dolore, esse natus!</p>
    </div>
     <div id="form_status"></div>
    <div class="contact-form">
        <form type="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );">
            <p>
                <input type="text" placeholder="Name" name="name" id="name">
                <input type="email" placeholder="Email" name="email" id="email">
            </p>
            <p>
                <input type="tel" placeholder="Phone" name="phone" id="phone">
                <input type="text" placeholder="Subject" name="subject" id="subject">
            </p>
            <p><textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea></p>
            <input type="hidden" name="token" value="FsWga4&@f6aw" />
            <p><input type="submit" value="Submit"></p>
        </form>
    </div>
</div> --}}
@endsection
