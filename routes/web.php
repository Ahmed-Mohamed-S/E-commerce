<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\TestController;

use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/






Route::get('/', [FirstController::class,'MainPage']);

Route::get('/product/{catid?}',[FirstController::class,'categoriesAndProducts'])->name('prods');

Route::get('category',[FirstController::class,'categoriesWithProducts'])->name('cats');
Route::get('/addproduct',[ProductController::class,'AddProduct'])->middleware('auth');
Route::get('editproduct/{productid?}',[ProductController::class,'EditProduct']);
Route::post('storeproduct',[ProductController::class,'StoreProduct']);
Route::get('removeproduct/{productid?}',[ProductController::class,'RemoveProduct']);
Route::get('reviews',[FirstController::class,'Reviews']);
Route::post('storereview',[FirstController::class,'StoreReview']);
Route::post('search', function(Request $request){
    $searchkey = $request->input('searchkey');
    $products = Product::where('name', 'like', '%'.$searchkey.'%')->paginate(3);
    return view('product', ['products' =>$products]);
});
Route::get('productstable',[ProductController::class,'ProductsTable']);


Route::get('addproductimages/{productid}',[ProductController::class,'AddProductImages']);
// Route::get('removeproductphoto/{productid}',[ProductController::class,'RemoveProductPhoto']);
Route::get('removeproductphoto/{productid}', [ProductController::class, 'RemoveProductPhoto'])->name('removeproductphoto');

Route::post('storeproductimage',[ProductController::class,'StoreProductImage'])->name('storeproductimage');

Route::get('/single-product/{productid}', [ProductController::class, 'ShowProduct']);





Route::get('cart',[CartController::class,'Cart'])->middleware('auth');
Route::get('/compeleteorder',[CartController::class,'CompeleteOrder'])->middleware('auth');
Route::post('/storeorder',[CartController::class,'StoreOrder']);
Route::get('/previousorder',[CartController::class,'PreviousOrder'])->middleware('auth');

Route::post('/lang',function(Request $request){
    Session::put('locale',$request->locale);
    return redirect()->back();

})->name('ChangeLanguage');



Route::get('/addproducttocart/{productid}',[CartController::class,'AddProductToCart'])->middleware('auth');
Route::get('removePro/{cartid}', function ($cartid) {

    Cart::find($cartid)->delete();


        return redirect('cart');
    });



Route::get('/test', [TestController::class, 'test']);







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
