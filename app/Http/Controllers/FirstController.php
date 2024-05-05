<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;





class FirstController extends Controller
{

    // public function MainPage(){
        // Session::put('date', '11-2-2024');
        // if(Auth::user())
        // Session::put('user_name', auth()->user()->name);




    //                 if(auth()->check()){
    //                     $user = auth()->user();
    //                     if($user->role === 'admin'){

    //                         return view('admin.home');

    //                     } else {
    //                         $categories = Category::all();
    //                         return view('welcome', compact('categories'));
    //                     }
    //                 } else {
    //                     $categories = Category::all();
    //                         return view('welcome', compact('categories'));
    //                 }



    // }
    public function MainPage()
        {

            $categories = Category::all();
            return view('welcome', compact('categories'));
        }












    public function categoriesAndProducts ($catid=null) {
        if ($catid) {

        $products = Product::where('category_id',$catid)->paginate(3);
        return view('product',['products' => $products]);
        }else {
            $products = Product::paginate(3);
            return view('product',['products' => $products]);
        }
    }





    public function categoriesWithProducts () {
        $categories = Category::all();
        $products = Product::all();
        return view('category',['products' => $products,'Categories' => $categories]);

    }

    public function Reviews () {
        $reviews = Review::all();

        return view('reviews',compact('reviews'));


    }

    public function StoreReview (Request $request) {
        $request->validate([
            'name' => ['required','max:100'],
            'phone' => 'required',
            'email' =>'required',
            'subject' =>'required',
            'message' =>'required',
            'imagepath' =>'required',



        ]);
        $newreviews =  new Review();
        $newreviews->name =  $request->name;
        $newreviews->phone =  $request->phone;
        $newreviews->email =  $request->email;
        $newreviews->subject =  $request->subject;
        $newreviews->message =  $request->message;
        $path = '';
        if ($request->hasFile('imagepath')) {
            $uploadedFile = $request->file('imagepath');
            $path = $uploadedFile->move('uploads', Str::uuid()->toString().'.'.$uploadedFile->getClientOriginalExtension());
        }

        // $request->photo->move('uploads',ا)سم الصورة
        $newreviews-> imagepath =$path;
        $newreviews->save();





        // return redirect()->route('reviews');
        return redirect()->back();




    }


}
