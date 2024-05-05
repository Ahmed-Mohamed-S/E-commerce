@extends('Layouts.master')

@section('content')




<div class="container mt-5 mb-5" style="text-align:center">
    <form action="{{ route('storeproductimage') }}" method="POST" enctype="multipart/form-data" action="storeproduct" id="fruitkha-contact" onSubmit="return valid_datas( this );" style="text-align: right" dir="rtl">
        @csrf()



        <div class="row mt-5 mb-5">
            <input type="hidden"     style="width: 100%"  placeholder="" name="product_id" id="product_id" value="{{ $product ? $product->id : '' }}">

            <div class="col-9 pt-3">
            <input type="file" class="form-control" class="col-12"  name="photo" id="photo">
            </div>
            <div class="col-3">

            <input type="submit" class="w-100" value="حفظ">
            </div>
            <span class="text-danger">
                @error('photo')
                {{$message}}

                @enderror
            </span>

        </div>

    </form>
    <div class="row">
@foreach ($productphotos as $item )
<div class="col-4">

<img class="m-2" src="{{asset($item->imagepath)}}" width="300" height="300" alt="">
{{-- <a href="removeproductphoto/{{$item->id}}" class="btn btn-danger"><i class="fas fa-trash"></i> حذف المنتج</a> --}}
<a href="{{ route('removeproductphoto', ['productid' => $item->id]) }}" class="btn btn-danger"><i class="fas fa-trash"></i> حذف المنتج</a>



</div>

@endforeach
    </div>
</div>

@endsection












