<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetails;



class CartController extends Controller
{
    public function cart () {
        $user_id=auth()->user()->id;
        $cartproducts=Cart::with('product')->where('user_id',$user_id)->get();//function model

        return view('products.cart',compact('cartproducts'));

    }


    public function AddProductToCart ($productid) {
        $user_id=auth()->user()->id;
        $result=Cart::where('user_id',$user_id)->where('product_id',$productid)->first();
        if($result){
            $result->quantity+=1;
            $result->save();

        }else{
            $newcart=new Cart;
            $newcart->product_id=$productid;
            $newcart->user_id=$user_id;
            $newcart->quantity=1;
            $newcart->save();




        }
        return redirect('cart');








        // return view('products.cart',['products' => $products]);
    }
    public function CompeleteOrder () {
        $user_id=auth()->user()->id;
        $cartproducts=Cart::with('product')->where('user_id',$user_id)->get();//function model


        return view('products.CompeleteOrder',compact('cartproducts'));

    }
    public function StoreOrder ( Request $request) {
        $user_id=auth()->user()->id;
        // $request->validate([
        //     'name'=>'required',
        //     'email'=>'required',
        //     'address'=>'required',
        //     'phone'=>'required',
        //     'note'=>'required',
        // ]);
        $neworder=new Order();
        $neworder->name=$request->name;
        // $neworder->name=$request->input('name');لو انا مش عامل فاليدايشن
        $neworder->email=$request->email;
        $neworder->address=$request->address;
        $neworder->phone=$request->phone;
        $neworder->note=$request->note;

        $neworder->user_id= $user_id;

        $neworder->save();


        $cartproducts=Cart::with('product')->where('user_id',$user_id)->get();//السلة بتاعة اليوزر الحالي عشان احطها في الاوردر ديتاليز
        foreach ($cartproducts as $item) {
            if ($item->product) { // Check if product exists
                $neworderdetails = new OrderDetails();
                $neworderdetails->product_id = $item->product_id;
                $neworderdetails->price = $item->product->price;
                $neworderdetails->quantity = $item->quantity;
                $neworderdetails->order_id = $neworder->id;
                $neworderdetails->save();
            } else {

                continue;
            }
        }

        Cart::where('user_id',$user_id)->delete();//بيفضي السلة





        return redirect('/');

    }

    public function PreviousOrder (){
        // $user_id=auth()->user()->id;
        // $result=Order::with('orderdetails')->where('user_id',$user_id)->get();
        //لو عايز بتاع اليوزر الحالي

        $result=Order::with('orderdetails')->get();
        return view('products.previousOrder',['orders'=>$result]);
    }



}
