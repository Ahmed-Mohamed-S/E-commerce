
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-qFOQ9YFAeGj1gDOuUD61g3D+tLDv3u1ECYWqT82WQoaWrOhAY+5mRMTTVsQdWutbA5FORCnkEPEgU0OF8IzGvA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.min.js"></script> --}}

 <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">



@extends('Layouts.master')
@section('content')
<div class="container mt-5 mb-5">
    <div class="text-right ">
    <a href="addproduct" class="btn btn-primary mt-5 mb-5 w-50"><i class="fas fa-plus"></i> اضافة منتج</a>
    </div>


<table id="myTable" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Image</th>
            <th>Actions</th>




        </tr>
    </thead>
    <tbody>

        @foreach ($products as $item)


        <tr>

            <td>{{$item->id}}</td>
             <td>{{ session('locale') == 'ar' ? $item->name : $item->nameEn }}</td>
            {{-- <td>{{$item->name}}</td> --}}
            <td>{{$item->price}}</td>
            <td>{{$item->quantity}}</td>
            <td> <img src="{{$item->imagepath}}" height="100" width="100"></td>

            <td>

                    <a href="removeproduct/{{$item->id}}" class="btn btn-danger"><i class="fas fa-trash"></i> حذف المنتج</a>
                    <a href="editproduct/{{$item->id}}" class="btn btn-success"><i class="fas fa-edit"></i> تعديل المنتج</a>
                    <a href="addproductimages/{{$item->id}}" class="btn btn-dark"><i class="fas fa-images"></i> اضافة صورة للمنتج</a>



            </td>
        </tr>
        @endforeach
    </tbody>

</table>
</div>
@endsection
<script>
    $(document).ready( function () {

        let table = new DataTable('#myTable');

    });
</script>
