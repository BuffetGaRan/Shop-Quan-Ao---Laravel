<!DOCTYPE html>
<html>
<head>
	<title>PHP - @yield('title')</title>
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<link href="{{ asset('src/BS/css/bootstrap.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('src/icon/css/all.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{asset('slick/slick.css')}}">
  	<link rel="stylesheet" type="text/css" href="{{asset('slick/slick-theme.css')}}">
	@stack('detail')
	@stack('css-product')
	<style>
		::-webkit-scrollbar {
		  width: 10px;
		}

		/* Track */
		::-webkit-scrollbar-track {
		  background: #f1f1f1; 
		}
		 
		/* Handle */
		::-webkit-scrollbar-thumb {
		  background: #888; 
		}

		/* Handle on hover */
		::-webkit-scrollbar-thumb:hover {
		  background: #555; 
		}
	</style>
</head>
<body>
	@if(session('cart'))
		<?php $totalPrice = 0; $totalProduct = 0; ?>
	    @foreach(session('cart') as $id => $details)
	        <?php
	        	$totalPrice += $details['price'] * $details['quantity'];
	        	$totalProduct += 1 * $details['quantity'];
	        ?>
	    @endforeach
    @endif

	<!-- Header -->
	<!-- ----------------- -->
	<div class="header row text-center">

		<!-- Menu -->
		<!-- ----------------- -->
		<div class="menu col-4"><i class="fas fa-bars"></i></div>

		<!-- Menu Hidden -->
		<!-- ----------------- -->
		<div class="menu__hidden row">
			<div class="col-4 menu__text">
				<div class="close">&times; close</div>
				<ul>
					<li><a href="{{ route('/') }}">Home</a></li>
					<li><a href="{{ route('product') }}">Product</a></li>
					<li><a href="{{ route('product') }}">Collection</a></li>
					<li><a href="{{ route('product') }}">Review</a></li>
					<li><a href="{{ route('product') }}">About Us</a></li>
					<li><a href="{{ route('product') }}">Contact Us</a></li>
				</ul>
			</div>
			<div class="col-4 menu__hightlight">
				<div class="menu__hightlight__hot">
					<a href="{{ route('product') }}">Hot</a>
				</div>
				<div class="menu__hightlight__sale">
					<a href="{{ route('product') }}">Top Sale</a>
				</div>
				<div class="menu__hightlight__quality">
					<a href="{{ route('product') }}">High Quality</a>
				</div>
			</div>
			<div class="col-4 menu__consult">
				<a href="{{ route('product') }}">Consult With Experts</a>
			</div>
		</div>

		<!-- Logo -->
		<!-- ----------------- -->
		<div class="logo col-4"><i class="fas fa-tshirt"></i></div>

		<!-- Search, Cart, User -->
		<!-- ----------------- -->
		<div id="info" class="info col-4">
			@if(session('cart'))
				<div class="cart" data-toggle="modal" data-target="#myModal"><i style="cursor: pointer;" class="fas fa-shopping-cart"><span class="number__cart">{{ $totalProduct }}</span></i></div>
			@else
				<div class="cart" data-toggle="modal" data-target="#myModal"><i style="cursor: pointer;" class="fas fa-shopping-cart"><span class="number__cart">0</span></i></div>
			@endif
			
			@if(Auth::check())
			<?php $name = Auth::user()->name?>
				<div class="user user__drop"><i style="cursor: pointer;" class="fas fa-user"></i></div>
				@if(Auth::user()->role == 1)
				<ul class="user__item">
					<li><a >Hello, {{$name}}</a></li>
				    <li><a href="http://127.0.0.1:8000/admin">Setting</a></li>
				    <li data-toggle="modal" data-target="#change-image" style="color: #007bff; cursor: pointer;">Change Image</li>
				    <li><a href="" onclick="LogOut()">Logout</a></li>
				</ul>
				@else
				<ul class="user__item">
					 <li><a>Hello, {{$name}}</a></li>
				     <li><a href="" onclick="LogOut()">Logout</a></li>
				</ul>
				@endif
			@else
				<div class="user" data-toggle="modal" data-target="#modal-login"><i style="cursor: pointer;" class="fas fa-user-times"></i></div>
			@endif
		</div>
	</div>
	
	<!-- Content -->
	<!-- ----------------- -->
	@yield('content')

	<!-- The Modal -->
	<!-- ----------------- -->
	<div class="modal fade" id="change-image">
	  	<div class="modal-dialog modal-md"> 
	    	<div class="modal-content">

		      	<!-- Modal Header -->
		      	<!-- ----------------- -->
		      	<div class="modal-header">
		        	<h3 class="modal-title">Change Image</h3>
		      	</div>

		      	<!-- Modal Body -->
		      	<!-- ----------------- -->
		      	<div class="modal-body">
					<form action="change-image" enctype="multipart/form-data" method="POST">
						@csrf
						<label for="image-header">Header: </label>
						<input id="image-header" name="image_header" type="file">
						<label for="image-slide-1">Slide 1: </label>
						<input id="image-slide-1" name="image_slide_1" type="file">
						<label for="image-slide-2">Slide 2: </label>
						<input id="image-slide-2" name="image_slide_2" type="file">
						<label for="image-slide-3">Slide 3: </label>
						<input id="image-slide-3" name="image_slide_3" type="file">
						<label for="image-banner-1">Banner 1: </label>
						<input id="image-banner-1" name="image_banner_1" type="file">
						<label for="image-banner-2">Banner 2: </label>
						<input id="image-banner-2" name="image_banner_2" type="file">
						<label for="image-men">Men: </label>
						<input id="image-men" name="image_men" type="file">
						<label for="image-women">Women: </label>
						<input id="image-women" name="image_women" type="file">
						<button type="submit" class="btn btn-danger">SAVE</button>
					</form>
	            </div>
	    	</div>
	  	</div>
	</div>

	<!-- The Modal -->
	<!-- ----------------- -->
	<div class="modal fade" id="modal-login">
	  	<div class="modal-dialog modal-sm"> 
	    	<div class="modal-content">

		      	<!-- Modal Header -->
		      	<!-- ----------------- -->
		      	<div class="modal-header">
		        	<h3 class="modal-title">Login</h3>
		      	</div>

		      	<!-- Modal Body -->
		      	<!-- ----------------- -->
		      	<div class="modal-body form__login">
					<form>
						<label>Email: </label>
						<input id="login-email" type="email" name="email" placeholder="Email...">
						<label>Password: </label>
						<input id="login-password" type="password" name="password" placeholder="Password...">
					</form>
					<a href="#">You forget password?</a>
					<a data-dismiss="modal" data-toggle="modal" data-target="#modal-register">Create account</a>
	            </div>
		      	<!-- Modal footer -->
		      	<!-- ----------------- -->
		      	<div class="modal-footer">
		      		<div class="login__error"></div>
		        	<button id="login" type="button" class="btn btn-danger">Login</button>
		      	</div>
	    	</div>
	  	</div>
	</div>
	

	<!-- Footer -->
	<!-- ----------------- -->
	<div class="container-fluid footer">

		<!-- Email -->
		<!-- ----------------- -->
		<div class="container-fluid footer__email text-center">

			<!-- Title Email -->
			<!-- ----------------- -->
			<div class="title__email">Sign up. You'll love hearing from us, we promise!</div>

			<!-- Form Email -->
			<!-- ----------------- -->
			<div class="form__email">
				<input type="email" id="inputEmail" placeholder="enter your email">
				<button id="btnEmail">SUBMIT</button>
			</div>

			<!-- Follow -->
			<!-- ----------------- -->
			<div class="follow">
				<ul>
					<li id="messenger"><i class="fab fa-facebook-messenger"></i></i></li>
					<li id="twitter"><i class="fab fa-twitter"></i></li>
					<li id="googlePlus"><i class="fab fa-google-plus-g"></i></li>
					<li id="instagram"><i class="fab fa-instagram"></i></li>
					<li id="youtube"><i class="fab fa-youtube"></i></li>
					<li id="facebook"><i class="fab fa-facebook-f"></i></li>
				</ul>
			</div>
		</div>

		<!-- Footer Bottom -->
		<!-- ----------------- -->
		<div class="container footer__bottom">

			<hr>

			<div class="form__footer__bottom row">
				<div class="item__bottom item__bottom__shop col-3">
					<div class="title__bottom">our shops</div>
					<ul>
						<li>Product Support</li>
						<li>PC Setup & Support</li>
						<li>Services</li>
						<li>Extended Service Plans</li>
						<li>Community</li>
					</ul>
				</div>
				<div class="item__bottom item__bottom__user col-3">
					<div class="title__bottom">orders</div>
					<ul>
						<li>My Account</li>
						<li>Order Tracking</li>
						<li>Watch List</li>
						<li>Customer Service</li>
						<li>Returns/Exchanges</li>
					</ul>
				</div>
				<div class="item__bottom item__bottom__shop col-3">
					<div class="title__bottom">our shops</div>
					<ul>
						<li>Product Support</li>
						<li>PC Setup & Support</li>
						<li>Services</li>
						<li>Extended Service Plans</li>
						<li>Community</li>
					</ul>
				</div>
				<div class="item__bottom item__bottom__address col-3">
					<div class="title__bottom">contact us</div>
					<ul>
						<li>
							<i class="fas fa-map-marker"></i>
							HaNoi, VietNam
						</li>
						<li>
							<i class="fas fa-envelope"></i>
							Email: contact@market.com
						</li>
						<li>  
							<i class="fas fa-mobile-alt"></i>
							<div>
								<div class="phone">PHONE: 033.7423.131</div>
								<div class="phone">PHONE: 033.1572.256</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Bottom -->
	<!-- ----------------- -->
	<div class="container-fluid bottom">
		<div class="container">
			<div class="bottom__content">
				<div class="bottom__content__title">
					You can pay by credit
				</div>
				<div class="credit__item">
					<i class="fab fa-cc-mastercard"></i>
					<i class="fab fa-cc-paypal"></i>
					<i class="fab fa-cc-visa"></i>
					<i class="fab fa-cc-jcb"></i>
					<i class="fab fa-cc-discover"></i>
					<i class="fab fa-cc-amex"></i>
				</div>
			</div>
		</div>
	</div>

	<!-- The Modal Cart -->
	<!-- ----------------- -->
	<div class="modal fade" id="myModal">
	  	<div class="modal-dialog modal-lg">
	    	<div class="modal-content">

		      	<!-- Modal Header -->
		      	<!-- ----------------- -->
		      	<div class="modal-header">
		        	<h4 class="modal-title">Your Cart</h4>
		        	<button type="button" class="close" data-dismiss="modal">&times;</button>
		      	</div>

		      	<!-- Modal Body -->
		      	<!-- ----------------- -->
		      	<div class="modal-body">
		      		<table class="table text-center">
	                    <thead class=" text-primary">
	                        <th>Name</th>
	                        <th>Price</th>
	                        <th>Photo</th>
	                        <th>Quantity</th>
	                        <th>Cancel</th>
	                    </thead>

	                    <tbody id="table-cart">
	                    	@if(session('cart'))
						        @foreach(session('cart') as $id => $details)
							        <tr>
							        	<td>{{ $details['name'] }}</td>
							        	<td>{{ $details['price'] }}$</td>
							        	<td style="width: 20%"><img style="width: 60%" src="{{ asset('Upload') }}/{{ $details['photo'] }}"></td>
							        	<td style="width: 10%"><input style="width: 100%" type="number" value="{{ $details['quantity'] }}"></td>
							        	<td><i data-id="{{ $details['id'] }}" class="fas fa-trash-alt remove-cart" style="cursor: pointer;"></i></td>
							        </tr>
						        @endforeach
						    @endif
	                    </tbody>
	                </table>
	            </div>

	            <div class="total__cart text-center">
	            	@if(session('cart'))
	            		<div style="float: left; margin: 15px;" class="total__cart__product"><b>Total products: </b> {{ $totalProduct }}</div>
	            		<div style="float: right; margin: 15px;" class="total__cart__price"><b>Total price: </b> {{ $totalPrice }}$</div>
	            	@else
	            		<div style="float: left; margin: 15px;" class="total__cart__product"><b>Total product: </b> 0</div>
	            		<div style="float: right; margin: 15px;" class="total__cart__price"><b>Total price: </b> 0</div>
	            	@endif
	            </div>
		      	<!-- Modal footer -->
		      	<!-- ----------------- -->
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-danger"><a href="{{route('pay')}}">Pay</a></button>
		      	</div>

	    	</div>
	  	</div>
	</div>
	
	<!-- The Modal Register -->
	<!-- ----------------- -->
	<div class="modal fade" id="modal-register">
	  	<div class="modal-dialog modal-sm">
	    	<div class="modal-content">

		      	<!-- Modal Header -->
		      	<!-- ----------------- -->
		      	<div class="modal-header">
		        	<h3 class="modal-title">Register</h3>
		      	</div>

		      	<!-- Modal Body -->
		      	<!-- ----------------- -->
		      	<div class="modal-body">
					<form>
						<label for="register-email">Email: </label>
						<input id="register-email" type="email" placeholder="Email...">
						<label for="register-password">Password: </label>
						<input id="register-password" type="password" placeholder="Password...">
						<label for="register-name">Name: </label>
						<input id="register-name" type="text" placeholder="Name...">
						<label for="register-phone">Phone: </label>
						<input id="register-phone" type="text" placeholder="Phone...">
						<label for="register-address">Address: </label>
						<input id="register-address" type="text" placeholder="Address...">
					</form>
					<a data-dismiss="modal" data-toggle="modal" data-target="#modal-login">You have an account?</a>
	            </div>
		      	<!-- Modal footer -->
		      	<!-- ----------------- -->
		      	<div class="modal-footer">
		        	<button id="register" type="button" class="btn btn-danger" data-dismiss="modal">Register</button>
		      	</div>

	    	</div>
	  	</div>
	</div>
	{{ csrf_field() }}

	<script src="{{ asset('src/Jquery/jquery.js') }}"></script>
	<script src="{{ asset('src/BS/js/bootstrap.bundle.js') }}"></script>
	<script src="{{ asset('src/BS/js/bootstrap.js') }}"></script>
	<script src="{{ asset('src/BS/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('src/index.js') }}" type="module"></script>
	<script src="{{asset('slick/slick.js')}}"></script>
	@stack('js-product')
	@stack('js-detail')
	@stack('js-master')

	<script>
		let _token = $('input[name="_token"]').val();

		$(document).on('click', '.remove-cart', function(){
			let id = $(this).attr('data-id');
		    $.ajax({
				url: "{{ route('RemoveCart') }}",
				method: "POST",
				data: {id:id, _token:_token},
				success: function(data){
					$('#myModal').load(location.href + " #myModal>*", "");
					$('#info').load(location.href + " #info>*", "");
				}
			});
		});

		$('#login').click(function(){
			let email = $('#login-email').val();
			let password = $('#login-password').val();
			$.ajax({
				url: "{{ route('Login') }}",
				method: "POST",
				data: {email:email, password:password, _token:_token},
				success: function(data){
					if(data === 'success'){
						window.location.reload();
					}
					else{
						$('.login__error').html(data);
					}
				}
			});
		});

		$('#register').click(function(){
			let email = $('#register-email').val();
			let password = $('#register-password').val();
			let name = $('#register-name').val();
			let phone = $('#register-phone').val();
			let address = $('#register-address').val();
			$.ajax({
				url: "{{ route('Register') }}",
				method: "POST",
				data: {email:email, password:password, name:name, phone:phone, address:address, _token:_token},
				success: function(data){
					window.location.reload();
				}
			});
		});

		function LogOut(){
			$.ajax({
				url: "{{ route('Logout') }}",
				method: "POST",
				data: {_token:_token},
				success: function(data){
					window.location.reload();
				}
			});
		};
	</script>
</body>
</html>