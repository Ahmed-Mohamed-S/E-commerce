<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductPhoto;

use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Milon\Barcode\DNS1D;


class ProductController extends Controller
{
    public function AddProduct () {
        $AllCategories=Category::all();

        return view('products.addproduct', ['AllCategories'=>$AllCategories]);
    }
    public function ProductsTable () {
        $products = Product::all();

        return view('products.productsTable', ['products'=>$products]);
    }
    public function ShowProduct ($productid) {
        $product = Product::with('category','images')->find($productid);
        $relatedproduct=Product::where('category_id',$product->category_id)->where('id','!=',$productid)//عشان يجيبلي كل المنتجات اللي في القسم ما عدا المنتج الحالي
        ->inRandomOrder()
        ->limit(3)
        ->get();

        return view('products.showproduct', ['product'=>$product,'relatedproduct'=>$relatedproduct]);
    }






    public function AddProductImages ($productid) {

        $product = Product::find($productid);
        $productphotos=ProductPhoto::where('product_id',$productid)->get();


        return view('products.addProductImages', ['product'=>$product,'productphotos'=>$productphotos]);
    }

    public function RemoveProductPhoto($productid)
    {
        if ($productid) {
            $currentProduct = ProductPhoto::find($productid);

            if ($currentProduct) {
                $currentProduct->delete();
                return redirect('productstable');
            }
        }

        abort(403, 'Please enter a valid product id in the route');
    }


    public function StoreProductImage(Request $request){
        $request->validate([
            'product_id'=>'required',

            'photo' =>'image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);
        $path_ = $request->file('photo')->storeAs('upload', Str::uuid()->toString().'.'.$request->file('photo')->getClientOriginalExtension() , 'public');
        $newImage = new ProductPhoto();
        $newImage->product_id=$request->product_id;
        $newImage->imagepath=$request->photo;

        $path='';
        if($request->has('photo')){
        $path=$request->photo->move('uploads',Str::uuid()->toString().'.'.$request->file('photo')->getClientOriginalExtension() );

        }
        $newImage -> imagepath =$path;


        $newImage -> save();



            return redirect('/');







    }



    public function EditProduct ($productid=null) {
        if ($productid != null) {
        $AllCategories=Category::all();

        $qrCode=QrCode::size(200)->generate('www.ahmedmo.com');

        // $barcode=DNS1D::getBarcodeHTML('2345008655', 'C39');
        $barcode = new DNS1D();
        $barcode->setStorPath(storage_path('app/public/barcodes')); // Set the storage path for barcodes
        $barcodeData = '2345008655'; // Data to encode in the barcode
        $barcodeImage = $barcode->getBarcodeHTML($barcodeData, 'C39');





        $currentProduct = Product::find($productid);
        if ($currentProduct==null) {
            abort(403,'not found product');
        }


        return view('products.editproduct',['product'=>$currentProduct,'AllCategories'=>$AllCategories, 'qrCode'=>$qrCode, 'barcodeImage'=>$barcodeImage]);
        }else{
            return redirect('addproduct');
        }
    }

    public function RemoveProduct($productid)
    {
        if ($productid) {
            $currentProduct = Product::find($productid);

            if ($currentProduct) {
                $currentProduct->delete();
                return redirect('product');
            }
        }

        abort(403, 'Please enter a valid product id in the route');
    }

    public function StoreProduct(Request $request){
        $request->validate([
            'name' => ['required','unique:Products','max:30'],
            'price' => 'required|integer',
            'quantity' =>'required|integer',
            'description' =>'',
            'photo' =>'image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);
        $path_ = $request->file('photo')->storeAs('upload', Str::uuid()->toString().'.'.$request->file('photo')->getClientOriginalExtension() , 'public');
        //php artisan storage:link


        //تعديل منتج

        if($request->id){
        $currentProduct = Product::find($request->id);
        $currentProduct -> name=$request-> name;
        $currentProduct -> price =$request-> price;
        $currentProduct -> quantity =$request-> quantity;
        $currentProduct -> category_id =$request-> category_id;
        if($request->has('photo')){
            $path=$request->photo->move('uploads',Str::uuid()->toString().'.'.$request->file('photo')->getClientOriginalExtension() );
        $currentProduct -> imagepath =$path;

            }
        $currentProduct ->save();
        return redirect('product');


        }else{
            //اضافة منتج

        $newProduct = new Product();
        $newProduct -> name=$request-> name;
        $newProduct->nameEn = $request->name;
        $newProduct -> price =$request-> price;
        $newProduct -> quantity =$request-> quantity;
        $newProduct -> category_id =$request-> category_id;
        $path='';
        if($request->has('photo')){
        $path=$request->photo->move('uploads',Str::uuid()->toString().'.'.$request->file('photo')->getClientOriginalExtension() );
        }
        // $request->photo->move('uploads',ا)سم الصورة
        $newProduct -> imagepath =$path;


        $newProduct -> save();



            return redirect('/');
        }

    }
}
