@extends('Frontend.master')

@section('title', 'Home')

@section('content')
    <div class="content">

		<!-- Image Top -->
		<!-- ----------------- -->
		@foreach($image as $item)
			<div class="container-fluid content__top" style="background-image: url('../Upload/{{$item->header}}')">
				<div class="content__top__item">
					<p>Luxury - Quality</p>
					<button><a href="http://127.0.0.1:8000/product">SHOP NOW</a></button>
				</div>
			</div>
		@endforeach
		<!-- Content Body -->
		<!-- ----------------- -->
		<div class="container content__body">

			<!-- Title -->
			<!-- ----------------- -->
			<div class="title__body text-center">
				<div class="title__body__header">MARKET</div>
				<div class="title__body__desc">Shop all you want</div>
			</div>

			<hr style="margin: 20px auto 30px; border-top: 2px solid #7f8fa6; opacity: .5; width: 50%;">

			<!-- Sale, Banner, Slider -->
			<!-- ----------------- -->
			@foreach($image as $item)
				<div class="sale row">
					<div class="col-8 slider">
						<img src="{{ asset('Upload')}}/{{ $item->slide1 }}">
						<img src="{{ asset('Upload')}}/{{ $item->slide2 }}">
						<img src="{{ asset('Upload')}}/{{ $item->slide3 }}">
					</div>
					<div class="col-4 banner">
						<div class="banner__up">
							<img src="{{ asset('Upload')}}/{{ $item->banner1 }}">
						</div>
						<div class="banner__down">
							<img src="{{ asset('Upload')}}/{{ $item->banner2 }}">
						</div>
					</div>
				</div>
			@endforeach

			<!-- Brand -->
			<!-- ----------------- -->
			<div class="row brand text-center">
				<div class="col-3 brand__1">
					<img src="{{ asset('img/brand_1.png') }}">
				</div>
				<div class="col-3 brand__2">
					<img src="{{ asset('img/brand_3.png') }}">
				</div>
				<div class="col-3 brand__3">
					<img src="{{ asset('img/brand_2.png') }}">
				</div>
			</div>

			<!-- Gender -->
			<!-- ----------------- -->
			@foreach($image as $item)
				<div class="row gender">
					<div class="col-6 gender__men">
						<img src="{{ asset('Upload')}}/{{ $item->men }}">
						<a href="http://127.0.0.1:8000/product" class="gender__men__hidden"></a>
					</div>
					<div class="col-6 gender__women">
						<img src="{{ asset('Upload')}}/{{ $item->women }}">
						<a href="http://127.0.0.1:8000/product" class="gender__women__hidden"></a>
					</div>
				</div>
			@endforeach

			<!-- Title Hot -->
			<!-- ----------------- -->
			<div class="title__hot">
				<div class="txt__title__hot">HOT PRODUCTS</div>
			</div>

			<hr style="margin: 10px auto 30px; border-top: 2px solid #7f8fa6; opacity: .5; width: 30%;">

			<!-- Fashion Hot -->
			<!-- ----------------- -->
			<div class="row fashion__hot">
				@foreach($hot as $item)
				<div class="col-3">
					<div class="card__hot">
						<div class="card__hot__image">
							<a href="product/detail/{{ $item->id }}"><img src="{{ asset('Upload') }}/{{ $item->image }}"></a>
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

			<!-- Album -->
			<!-- ----------------- -->
			<div class="album">
				<div class="title_album text-center">ALBUM</div>
				<div class="row album__1">
					@foreach($season as $item)
					<div class="col-3">
						<img src="{{ asset('Upload') }}/{{ $item->image }}">
					</div>
					@endforeach
				</div>
				<div class="row album__2">
					@foreach($men as $item)
					<div class="col-3">
						<img src="{{ asset('Upload') }}/{{ $item->image }}">
					</div>
					@endforeach
				</div>
			</div>

			<!-- Tab Product -->
			<!-- ----------------- -->
			<div class="tab__product">

				<!-- Tab Menu Header -->
				<!-- ----------------- -->
				<ul class="nav nav-tabs">
				    <li class="nav-item">
				      <a class="nav-link active" data-toggle="tab" href="#season">Season</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link" data-toggle="tab" href="#bestSell">Best Sell</a>
				    </li>
				</ul>

				<!-- Tab Menu Item -->
				<!-- ----------------- -->
				<div class="tab-content">

					<!-- Tab Menu Item Season -->
					<!-- ----------------- -->
				    <div id="season" class="container tab-pane active"><br>
				    	<div class="row tab__product__season">
				    		@foreach($season as $item)
				    		<div class="col-2">
								<div class="card__tab">
									<div class="card__tab__image">
										<a href="product/detail/{{ $item->id }}"><img src="{{ asset('Upload') }}/{{ $item->image }}"></a>
									</div>
									<div class="card__tab__title">
										<div class="card__tab__title__name">{{ $item->name }}</div>
										<div class="card__tab__title__price">{{ $item->price }}$</div>
									</div>
									<div data-id="{{ $item->id }}" class="item__cart">
										<i class="fas fa-shopping-cart"></i>
									</div>
								</div>
							</div>
				    		@endforeach
				    	</div>
				    </div>

				    <!-- Tab Menu Item Best Sell -->
					<!-- ----------------- -->
				    <div id="bestSell" class="container tab-pane fade"><br>
				    	<div class="row tab__product__best__sell">
				    		@foreach($bestsell as $item)
				    		<div class="col-2">
								<div class="card__tab">
									<div class="card__tab__image">
										<a href="product/detail/{{ $item->id }}"><img src="{{ asset('Upload') }}/{{ $item->image }}"></a>
									</div>
									<div class="card__tab__title">
										<div class="card__tab__title__name">{{ $item->name }}</div>
										<div class="card__tab__title__price">{{ $item->price }}$</div>
									</div>
									<div data-id="{{ $item->id }}" class="item__cart">
										<i class="fas fa-shopping-cart"></i>
									</div>
								</div>
							</div>
				    		@endforeach
				    	</div>
				    </div>
				</div>
			</div>
		</div>

		<!-- Content Footer -->
		<!-- ----------------- -->
		<div class="container content__footer text-center">

			<!-- Title Content Footer -->
			<!-- ----------------- -->
			<div class="title__content__footer">we want you to express yourself</div>
			<div class="row commitment">
				<div class="col-4 commitment__1">
					<img src="https://www.lustonelabel.com/wp-content/uploads/2018/04/item2.svg">
					<div class="title__commitment">refund policy</div>
					<div class="txt__commitment">
						Changed your mind? No problem! You're covered by our 30 day refund policy
					</div>
				</div>
				<div class="col-4 commitment__2">
					<img src="https://www.lustonelabel.com/wp-content/uploads/2018/04/item3.svg">
					<div class="title__commitment">premium packaging</div>
					<div class="txt__commitment">
						All pieces come carefully packed complete with dust bags and packaging so gorgeous you'll want to keep it!
					</div>
				</div>
				<div class="col-4 commitment__3">
					<img src="https://www.lustonelabel.com/wp-content/uploads/2018/04/item2.svg">
					<div class="title__commitment">superior quality</div>
					<div class="txt__commitment">
						We take great care to ensure the best quality leathers are used on all our pieces.
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@push('js-master')
	<script>
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

		$(".slider").slick({
        	lazyLoad: 'ondemand', // ondemand progressive anticipated
        	infinite: true,
        	autoplay: true,
  			autoplaySpeed: 3000,
      	});
	</script>
@endpush