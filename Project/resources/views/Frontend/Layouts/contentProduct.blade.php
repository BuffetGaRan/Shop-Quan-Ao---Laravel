@extends('Frontend.master')

@section('title', 'Product')

@push('css-product')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/product.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/noUiSlider.css') }}">
@endpush

@section('content')
	<!-- Product Page -->
	<!-- ----------------- -->
	<div class="container-fluid product__page">

		<!-- Image Top -->
		<!-- ----------------- -->
		<div class="image__top" style="background: black;">
			<img style="opacity: .7; margin-top: -100px;" src="{{ asset('img/banner_1.jpg') }}">
		</div>

		<!-- Header Product -->
		<!-- ----------------- -->
		<div class="header__product">

			<!-- Filter -->
			<!-- ----------------- -->
			<div class="filter">

				<!-- Button Filter -->
				<!-- ----------------- -->
				<div id="btn__filter"><i class="fas fa-filter"></i> Filter</div>

				<!-- URL Page -->
				<!-- ----------------- -->
				<ul class="url__page">
					<li><a href="http://127.0.0.1:8000/">Home</a></li>
					/
					<li><a href="http://127.0.0.1:8000/product">Product</a></li>
				</ul>

				<!-- Filter Hidden -->
				<!-- ----------------- -->
				<div class="filter__hidden">
					<div class="title">Product Category</div>

					<!-- Filter Hidden Category -->
					<!-- ----------------- -->
					<ul class="filter__category">
						<li class="filter__category__gender">
							<div data-toggle="collapse" data-target="#collapse-men">
								Men
								<div>+</div>
							</div>
							
							<ul id="collapse-men" class="category collapse">
								@foreach($product_category as $item)
								<div>
									<input id="1-{{ $item->id }}" type="radio" name="gender">
									<li class="li__edit">
										<label for="1-{{ $item->id }}">{{ $item->name }}</label>
									</li>
								</div>
								@endforeach
							</ul>
						</li>
						<li class="filter__category__gender">
							<div data-toggle="collapse" data-target="#collapse-women">
								Women
								<div>+</div>
							</div>
							<ul id="collapse-women" class="category collapse">
								@foreach($product_category as $item)
								<div>
									<input id="2-{{ $item->id }}" type="radio" name="gender">
									<li class="li__edit">
										<label for="2-{{ $item->id }}">{{ $item->name }}</label>
									</li>
								</div>
								@endforeach
							</ul>
						</li>
					</ul>

					<hr>

					<!-- Filter Hidden Price -->
					<!-- ----------------- -->
					<div class="filter__price">
						<div class="filter__price__range">
							<label>Filter your price</label>
							<div id="range"></div>
							{{ csrf_field() }}
						</div>
						<div class="filter__storage">
							<div data-toggle="collapse" data-target="#collapse-storage">
								storage
								<div>+</div>
							</div>
							<ul id="collapse-storage" class="category collapse">
								<div>
									<input type="radio" name="storage"><li class="li__edit">Hà Nội</li>
								</div>
								<div>
									<input type="radio" name="storage"><li class="li__edit">Hồ Chí Minh</li>
								</div>
							</ul>
						</div>
					</div>

					<hr>

					<!-- Filter Hidden Linh Tinh -->
					<!-- ----------------- -->
					<div class="filter__more">
						<ul class="filter__more__item">
							<li class="filter__more__item__sale">
								<input id="discount" type="radio" name="more"><label for="discount">Sale</label>
							</li>
							<li class="filter__more__item__hot">
								<input id="hot" type="radio" name="more"><label for="hot">Hot</label>
							</li>
							<li class="filter__more__item__bestsell">
								<input id="selled" type="radio" name="more"><label for="selled">Top 5 Selled</label>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- Search -->
			<!-- ----------------- -->
			<div class="search">
				<input class="txt__search" type="text" name="search" placeholder="Seach Product">
				<label class="btn__search"><i class="fas fa-search"></i></label>
				{{ csrf_field() }}
			</div>

			<!-- Sort -->
			<!-- ----------------- -->
			<div class="sort">
				<div class="info__item">
					
				</div>
				<div class="dropdown sort__item">
					<div class="dropdown-toggle sort__item__title" data-toggle="dropdown">Sort</div>
					<div class="dropdown-menu sort__item__menu">
						<div id="dropdown-filter-default" class="dropdown-item item">Default</div>
						<div id="dropdown-filter-toHigh" class="dropdown-item item">To High</div>
						<div id="dropdown-filter-toLow" class="dropdown-item item">To Low</div>
						<div class="dropdown-divider"></div>
						<div id="dropdown-filter-toOld" class="dropdown-item item">Old</div>
					</div>
				</div>
			</div>
		</div>

		<!-- List Item -->
		<!-- ----------------- -->
		<div class="container-fluid text-center list__item">

			<!-- Container Item -->
			<!-- ----------------- -->
			<div class="box__item"></div>
			<div id="not-txt"></div>
		</div>
	</div>

@endsection
@push('js-product')
	<script src="{{ asset('src/Js/noUiSlider.js') }}"></script>

	<script>
		
        $(document).ready(()=>{
			$('.box__item').html(normal);
			$('.info__item').text('Show '+$('.box__item .item').length+' in {{$countProduct}} result');
		});

		let normal = `@foreach($product as $item)
				<div class="item">
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
				@endforeach`;

		let toHigh = `@foreach($toHigh as $item)
				<div class="item">
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
				@endforeach`;

		let toLow = `@foreach($toLow as $item)
				<div class="item">
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
				@endforeach`;

		let toOld = `@foreach($toOld as $item)
				<div class="item">
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
				@endforeach`;

		$('#dropdown-filter-default').click(()=>{
			$('.box__item').html(normal);
			location.hash = '';
		});

		$('#dropdown-filter-toHigh').click(()=>{
			$('.box__item').html(toHigh);
			location.hash = 'FilterToHigh';
		});

		$('#dropdown-filter-toLow').click(()=>{
			$('.box__item').html(toLow);
			location.hash = 'FilterToLow';
		});

		$('#dropdown-filter-toOld').click(()=>{
			$('.box__item').html(toOld);
			location.hash = 'FilterToOld';
		});


		// Form Search Price
		// ----------------------------------
		let range = document.getElementById('range');
		noUiSlider.create(range, {
		    start: [0, 100],
		    connect: true,
		    tooltips: [true, true],
		    range: {
		        'min': 0,
		        'max': 100
		    },

		    // Format Decimal Number Price
			// ----------------------------------
		    format:{
		    	from: function(value) {
		            return parseInt(value);
		        },
		    	to: function(value) {
		            return parseInt(value);
		        }
		    }
		});


		// Ajax Search Price
		// ----------------------------------
		range.noUiSlider.on('change', function(range){
            let _token = $('input[name="_token"]').val();
            $.ajax({url:"{{route('FilterProduct')}}", method:"POST", data:{range:range, _token:_token},
                success:function(data){
                	$('.box__item').html(data);
                	location.hash = 'FilterPrice';
                }   
            });
		});

		
		// Ajax Search Gender & Category
		// ----------------------------------
		$('[name="gender"]').change(function(){
			let idGender = $(this).attr('id');
			let _token = $('input[name="_token"]').val();
            $.ajax({url:"{{route('FilterProduct')}}", method:"POST", data:{idGender:idGender, _token:_token},
                success:function(data){
                	$('.box__item').html(data);
                	location.hash = 'FilterGender';
                }   
            });
		})

		$('[name="more"]').change(function(){
			let more = $(this).attr('id');
			let _token = $('input[name="_token"]').val();
            $.ajax({url:"{{route('FilterProduct')}}", method:"POST", data:{more:more, _token:_token},
                success:function(data){
                	$('.box__item').html(data);
                	location.hash = 'FilterMore';
                }   
            });
		});

		$('.txt__search').keyup(function(){
            let search = $(this).val();
            if(search != ''){
                var _token = $('input[name="_token"]').val();
                $.ajax({
                	url:"{{route('FilterProduct')}}",
                	method:"POST",
                	data:{search:search, _token:_token},
                    success:function(data){
                        $('.box__item').html(data);
                        location.hash = 'FilterSearch';
                    }
                });
            }
            else{
                $('.box__item').html(normal);
                location.hash = '';
            }

        	if($('.box__item').html() == ''){
        		$('#not-txt').text('Không có sản phẩm nào');
        	}
        	else{
        		$('#not-txt').text('');
        	}

            $(window).click(()=>{
                if($('#not-txt').text() == 'Không có sản phẩm nào'){
                    $('.box__item').html(normal);
                    $('#not-txt').text('');
                    location.hash = '';
                }
            });
        });

        let _token = $('input[name="_token"]').val();
		load_data('', _token);

		function load_data(id='', _token){
			$.ajax({
				url:"{{ route('PaginateProduct') }}",
				method:"POST",
				data:{id:id, _token:_token},
				success:function(data){
			    	$('#load_more_button').remove();
			   		$('.box__item').append(data);
				}
			});
		}

		$(document).on('click', '#load_more_button', function(){
			var id = $(this).data('id');
			$('#load_more_button').html('<b>Loading...</b>');
			load_data(id, _token);
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
