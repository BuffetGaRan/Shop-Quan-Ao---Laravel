@extends('Frontend.master')

@section('title', 'Detail')

@push('detail')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/detail.css') }}">
@endpush

@section('content')
	
	<!-- Product Detail -->
	<!-- ----------------- -->
	<div class="container-fluid product__detail">

		<!-- Image Top -->
		<!-- ----------------- -->
		<div class="image__top" style="background: black;">
			<img style="opacity: .7; margin-top: -100px;" src="{{ asset('img/banner_1.jpg') }}">
		</div>

		<!-- Layout -->
		<!-- ----------------- -->
		<div class="container row detail__layout">

			<!-- Image -->
			<!-- ----------------- -->
			@foreach($product as $item)
			<div class="col-6 detail__image">
				<div class="img__zoom__container">
					<img id="myimage" src="{{ asset('Upload') }}/{{ $item->image }}">
					<div id="myresult" class="img__zoom__result"></div>
				</div>
				<!-- <div class="image__front__back">
					<div class="item front">
						<img src="{{ asset('Upload') }}/{{ $item->image }}">
					</div>
					<div class="item back">
						<img src="{{ asset('Upload') }}/{{ $item->image }}">
					</div>
				</div> -->
			</div>

			<!-- Info -->
			<!-- ----------------- -->
			<div class="col-6 detail__info">
				<div class="name">{{ $item->name }}</div>
				<div class="desc">{{ $item->description }}</div>

				<hr>

				<!-- Size -->
				<!-- ----------------- -->
				<div class="size__title">vailable sizes</div>
				<div class="size edit">
					<div class="item">XS</div>
					<div class="item">S</div>
					<div class="item">M</div>
					<div class="item">L</div>
				</div>

				<div class="how__size">
					<i class="iconfont icon-gd-size"></i> Hướng dẫn chọn size
				</div>

				<div class="add__cart">
					<button data-id="{{ $id }}" id="add__cart__detail">Add to cart</button>
					<div class="heart"><i class="far fa-heart"></i></div>
				</div>

				<div class="price">Price $200 USD</div>

				<!-- Ship And Refund -->
				<!-- ----------------- -->
				<div class="ship__return">
					<div class="ship">
						<i class="fas fa-shipping-fast"></i>
						<div class="ship__info">
							<div class="ship__title">
								Miễn phí vận chuyển
							</div>
							<div class="ship__desc">
								Miễn phí vận chuyển Tiết kiệm
								<br>
								Giao hàng dự kiến vào ngày 30/01/2021.
							</div>
						</div>
					</div>
					<div class="return">
						<i class="fas fa-shipping-fast"></i>
						<div class="return__info">
							<div class="return__title">
								Chính sách hoàn trả
							</div>
							<div class="return__desc">
								Tìm hiểu chi tiết
							</div>
						</div>
					</div>
				</div>

				<div class="info__sale div__edit">Sản phẩm vẫn trong chương trình Sale của shop.</div>

				<!-- Time Sale -->
				<!-- ----------------- -->
				<div class="time div__edit">
					<div class="sold">
						<i class="fas fa-tag"></i>
						<div>
							<div class="sold__number">61</div>
							<div class="sold__txt">sold</div>
						</div>
					</div>
					<div class="item">
						<div id="days" class="time__number">14</div>
						<div class="time__txt">days</div>
					</div>
					<div class="item">
						<div id="hours" class="time__number">6</div>
						<div class="time__txt">hours</div>
					</div>
					<div class="item">
						<div id="mins" class="time__number">14</div>
						<div class="time__txt">mins</div>
					</div>
					<div class="item">
						<div id="secs" class="time__number">41</div>
						<div class="time__txt">secs</div>
					</div>
				</div>

				<!-- To Sale or Back -->
				<!-- ----------------- -->
				<div class="back__sale">
					<a href="http://127.0.0.1:8000/product#FilterMoreSale"><div class="to__sale">more sale</div></a>
					<a href="http://127.0.0.1:8000/product"><div class="to__back"><i class="fas fa-angle-double-left"></i>Back</div></a>
				</div>
			</div>
			@endforeach
		</div>

		<!-- Suggestion More -->
		<!-- ----------------- -->
		<div class="container suggestion text-center">
			<div class="suggestion__title">
				More product suggestion
			</div>
			<div class="row suggestion__product">
				@foreach($suggestion as $item)
				<div class="col-3 item">
					<div class="card__hot">
						<div class="card__hot__image">
							<a href="http://127.0.0.1:8000/product/detail/{{ $item->id }}"><img src="{{ asset('Upload') }}/{{ $item->image }}"></a>
						</div>
						<div class="card__hot__title">
							<div class="card__hot__title__name">{{ $item->name }}</div>
							<div class="card__hot__title__price">{{ $item->price }}$</div>
						</div>
						<div data-id="{{ $item->id }}" class="item__cart">
							<i class="fas fa-shopping-cart"></i>
						</div>
					</div>
				</div>
				@endforeach
			</div>

			<hr>
		</div>

		<!-- Hidden Tab -->
		<!-- ----------------- -->
		<div class="hidden__tab">

			<!-- Choose Size -->
			<!-- ----------------- -->
			<div class="choose__size">

				<!-- Close -->
				<!-- ----------------- -->
				<div class="close"><i class="fas fa-times"></i></div>

				<!-- Title -->
				<!-- ----------------- -->
				<div class="title">
					Hướng dẫn chọn Size
				</div>

				<!-- Image -->
				<!-- ----------------- -->
				<div class="image">
					<img src="https://c.bonfireassets.com/static/product-type/bacf6cd6-b53d-469c-ab96-02afe5b15f71/dimension/f170/tshirt.png">
				</div>

				<!-- Table And Desc -->
				<!-- ----------------- -->
				<div class="container">
					<table class="table">
						<thead>
							<tr>
								<th></th>
								<th>XS</th>
								<th>S</th>
								<th>M</th>
								<th>L</th>
								<th>XL</th>
								<th>2XL</th>
								<th>3XL</th>
								<th>4XL</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Length</td>
								<td>27"</td>
								<td>28"</td>
								<td>29"</td>
								<td>30"</td>
								<td>31"</td>
								<td>32"</td>
								<td>33"</td>
								<td>34"</td>
							</tr>
							<tr>
								<td>Width</td>
								<td>17½"</td>
								<td>19"</td>
								<td>20½"</td>
								<td>22"</td>
								<td>24"</td>
								<td>26"</td>
								<td>28"</td>
								<td>30"</td>
							</tr>
						</tbody>
					</table>

					<div class="intro">
						<div class="intro__title">ABOUT THIS PRODUCT</div>
						<div class="intro__desc">
							The Premium Unisex Tee is a classic crewneck t-shirt usually by Next Level Apparel. This shirt is usually made with a 60/40 blend of cotton and poly. Exceptions include heavy metal, pink, berry, maroon, light olive, gold, forest green, and Tahiti blue, which are 100% cotton.  All fabric is combed and ringspun for a soft texture and premium feel.
						</div>
					</div>
				</div>
			</div>

			<!-- Free Ship -->
			<!-- ----------------- -->
			<div class="free__ship container">
				<div class="close"><i class="fas fa-times"></i></div>
				<div class="title__ship">Phí vận chuyển</div>

				<hr>

				<form>
					<div class="area">
						<div class="location">Địa điểm:</div>

						<select class="city">
							<option>Thành Phố</option>
							<option>Hà Nội</option>
							<option>Bắc Ninh</option>
							<option>Hà Tây</option>
						</select>

						<select class="district">
							<option>Quận, Huyện</option>
							<option>Hà Nội</option>
							<option>Bắc Ninh</option>
							<option>Hà Tây</option>
						</select>

						<div class="country">Vietnam</div>
					</div>

					<div class="txt__1">* Giao hàng miễn phí trong nội thành hà nội, tỉnh lẻ miễn phí đơn trên 1.000.000đ</div>

					<div class="method__ship">
						<div class="name">Phương pháp vận chuyển:</div>

						<select>
							<option>Giao hàng tiết kiệm</option>
							<option>Giao hàng nhanh</option>
						</select>
					</div>
				</form>

				<table>
					<thead>
						<tr>
							<th>Phương pháp vận chuyển</th>
							<th>Thời gian sản phẩm đến nơi</th>
							<th>Chi phí vận chuyển</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Giao hàng tiết kiệm</td>
							<td>7 - 10 ngày</td>
							<td>200.000đ</td>
						</tr>
					</tbody>
				</table>

				<div class="txt__2">* Phí vận chuyển sẽ được cộng vào tiền sản phẩm</div>

				<div class="desc__method row">
					<div class="save col-6">
						<div class="title">Giao hàng tiết kiệm</div>
						<div class="desc">
							Giao hàng tiết kiệm sẽ giúp tiết kiệm chi phí nhưng mặt khác, thời gian giao hàng sẽ chậm hơn so với giao hàng nhanh.
						</div>
					</div>
					<div class="fast col-6">
						<div class="title">Giao hàng nhanh</div>
						<div class="desc">
							Giao hàng nhanh sẽ giúp tiết kiệm thời gian nhận hàng, cam kết sẽ nhanh chóng nếu bạn chọn phương pháp giao hàng này.
						</div>
					</div>
				</div>
			</div>

			<!-- Policy Turn -->
			<!-- ----------------- -->
			<div class="policy__return">
				<div class="close"><i class="fas fa-times"></i></div>
				<div class="title__return">Chính sách hoàn trả</div>

				<hr>

				<div class="desc__return">* Khách hàng có thể trao đổi hoặc hoàn tiền trong vòng 30 ngày kể từ ngày giao hàng.</div>

				<div class="request">Yêu cầu:</div>

				<ol class="request__list">
					<li>Trong thời gian quy định 30 ngày kể từ ngày giao hàng.</li>
					<li>Sản phẩm chưa được sử dụng, không bị hư hỏng và phải trong gói ban đầu.</li>
					<li>Khi gửi trả lại sản phẩm, phí vận chuyển người mua sẽ chịu.</li>
				</ol>
			</div>
		</div>
	</div>
	{{ csrf_field() }}
@endsection

@push('js-detail')
	<script>
		let _token = $('input[name="_token"]').val();
		
		$("#add__cart__detail").click(function($id){
			let id = $(this).attr('data-id');
		    $.ajax({
				url: "{{ route('AddCart') }}",
				method: "POST",
				data: {id:id, _token:_token},
				success: function(data){
					$('#myModal').load(location.href + " #myModal>*", "");
					$('#info').load(location.href + " #info>*", "");
				}
			});
		});

		$(document).on('click','.item__cart', function(){
			let id = $(this).attr('data-id');
		    $.ajax({
				url: "{{ route('AddCart') }}",
				method: "POST",
				data: {id:id, _token:_token},
				success: function(data){
					$('#myModal').load(location.href + " #myModal>*", "");
					$('#info').load(location.href + " #info>*", "");
				}
			});
		});

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
			$.ajax({
				url: "{{ route('Register') }}",
				method: "POST",
				data: {email:email, password:password, name:name, phone:phone, _token:_token},
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
@endpush