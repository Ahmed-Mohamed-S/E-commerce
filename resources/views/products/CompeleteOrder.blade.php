
@extends('Layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Check Out</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>

	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.html">
								<img src="assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="#">Home</a>
									<ul class="sub-menu">
										<li><a href="index.html">Static Home</a></li>
										<li><a href="index_2.html">Slider Home</a></li>
									</ul>
								</li>
								<li><a href="about.html">About</a></li>
								<li><a href="#">Pages</a>
									<ul class="sub-menu">
										<li><a href="404.html">404 page</a></li>
										<li><a href="about.html">About</a></li>
										<li><a href="cart.html">Cart</a></li>
										<li><a href="checkout.html">Check Out</a></li>
										<li><a href="contact.html">Contact</a></li>
										<li><a href="news.html">News</a></li>
										<li><a href="shop.html">Shop</a></li>
									</ul>
								</li>
								<li><a href="news.html">News</a>
									<ul class="sub-menu">
										<li><a href="news.html">News</a></li>
										<li><a href="single-news.html">Single News</a></li>
									</ul>
								</li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="shop.html">Shop</a>
									<ul class="sub-menu">
										<li><a href="shop.html">Shop</a></li>
										<li><a href="checkout.html">Check Out</a></li>
										<li><a href="single-product.html">Single Product</a></li>
										<li><a href="cart.html">Cart</a></li>
									</ul>
								</li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Fresh and Organic</p>
						<h1>Check Out Product</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- check out section -->
	<div class="checkout-section mt-150 mb-150">
		<div class="container">
			<div class="row">

				<div class="col-lg-12">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
						  <div class="card single-accordion">
						    <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Billing Address
						        </button>
						      </h5>
						    </div>

						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="billing-address-form">
						        	<form action="/storeorder" method="POST" id="store-order" name="store-order">
                                        @csrf
						        		<p><input type="text" required id="name" name="name" placeholder="Name"></p>
						        		<p><input type="email" required id="email" name="email" placeholder="Email"></p>
						        		<p><input type="text" required id="address" name="address" placeholder="Address"></p>
						        		<p><input type="tel" required id="phone" name="phone" placeholder="Phone"></p>
						        		<p><textarea name="note" id="note" cols="30" rows="10" placeholder="Say Something"></textarea></p>
						        	</form>
						        </div>
						      </div>
						    </div>
						  </div>
						  <div class="card single-accordion">
						    <div class="card-header" id="headingTwo">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          Shipping Address
						        </button>
						      </h5>
						    </div>
						    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="shipping-address-form">
						        	<p>Your shipping address form is here.</p>
						        </div>
						      </div>
						    </div>
						  </div>
						  <div class="card single-accordion">
						    <div class="card-header" id="headingThree">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          Card Details
						        </button>
						      </h5>
						    </div>



						    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="card-details">
                                    <div class="cart-section mt-150 mb-150">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-8 col-md-12">
                                                    <div class="cart-table-wrap">
                                                        <table class="cart-table">
                                                            <thead class="cart-table-head">
                                                                <tr class="table-head-row">
                                                                    <th class="product-remove"></th>
                                                                    <th class="product-image">Product Image</th>
                                                                    <th class="product-name">Name</th>
                                                                    <th class="product-price">Price</th>
                                                                    <th class="product-quantity">Quantity</th>
                                                                    <th class="product-total">Total</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                {{-- @foreach ($cartproducts as $item)
                                                                     @php
                                                                     $product = App\Models\Product::find($item->product_id);
                                                                     @endphp

                                                                   <tr class="table-body-row">
                                                                    <td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
                                                                    <td class="product-image"><img src="{{$product->imagepath}}" alt=""></td>
                                                                    <td class="product-name">{{$product->name}}</td>
                                                                    <td class="product-price">{{$product->price}}</td>
                                                                    <td class="product-quantity">{{$item->quantity}}</td>
                                                                   <td class="product-total">{{$item->quantity * $product->price}}</td>
                                                                   </tr>
                                                                @endforeach --}}
                                                                <?php $totalPrice = 0; ?>

                                                             @foreach ($cartproducts as $item)

                                                                <tr class="table-body-row">
                                                                    <td class="product-remove"><a href="removePro/{{$item->id}}"><i class="far fa-window-close"></i></a></td>
                                                                    <td class="product-image"><img src="{{asset($item->product->imagepath)}}" alt=""></td>
                                                                    <td class="product-name"><a href="single-product/{{$item->product->id}}">{{$item->product->name}}</td>
                                                                    <td class="product-price">{{$item->product->price}}</td>
                                                                    <td class="product-quantity">{{$item->quantity}}</td>
                                                                    <td class="product-total">{{$item->quantity * $item->product->price}} $</td>
                                                                    <?php $totalPrice +=$item->quantity * $item->product->price; ?>
                                                                </tr>
                                                             @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="total-section">
                                                        <table class="total-table">
                                                            <thead class="total-table-head">
                                                                <tr class="table-total-row">
                                                                    <th>Total</th>
                                                                    <th>Price</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                {{-- <tr class="total-data">
                                                                    <td><strong>Subtotal: </strong></td>
                                                                    <td>$500</td>
                                                                </tr> --}}
                                                                {{-- <tr class="total-data">
                                                                    <td><strong>Shipping: </strong></td>
                                                                    <td>$45</td>
                                                                </tr> --}}
                                                                <tr class="total-data">
                                                                    <td><strong>Total: </strong></td>
                                                                    <td>{{ $totalPrice }}$</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="cart-buttons">



                                                        </div>
                                                    </div>

                                                    {{-- <div class="coupon-section">
                                                        <h3>Apply Coupon</h3>
                                                        <div class="coupon-form-wrap">
                                                            <form action="index.html">
                                                                <p><input type="text" placeholder="Coupon"></p>
                                                                <p><input type="submit" value="Apply"></p>
                                                            </form>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
						        </div>
						      </div>
						    </div>
						  </div>
						</div>

					</div>
				</div>
                <div class="col-lg-12 mt-5 ">
                    <a onclick="event.preventDefault(); document.getElementById('store-order').submit();" class="boxed-btn"> Place Order</a>
                </div>













</body>
</html>
@endsection
