<!DOCTYPE html>
<html>
<head>
	<title>Pay</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/pay.css') }}">
</head>
<body>
	@if(Auth::check())
		@if(session('cart'))
	        <button class="btn__pay"><a href="{{ route('AddData') }}">Pay</a></button>
	    @else
	    	<div class="nothing">Bạn không có đơn hàng để thanh toán</div>
	    @endif
	@else
		@if(session('cart'))
	        <form action="pay/adddata2" method="POST">
	        	<div>Information Ship</div>
	        	@csrf
				<label for="name">Name:</label>
				<input type="text" id="name" name="name">
				<label for="email">Email:</label>
				<input type="text" id="email" name="email">
				<label for="phone">Phone:</label>
				<input type="text" id="phone" name="phone">
				<label for="address">Address:</label>
				<input type="text" id="address" name="address">
				<button>PAY</button>
			</form>
	    @else
	    	<div class="nothing">Bạn không có đơn hàng để thanh toán</div>
	    @endif
	@endif
</body>
</html>