// Detail Page
		// -----------------------------
		$('.how__size').click(()=>{
			$('.hidden__tab').css('visibility', 'visible');
			$('.choose__size').addClass('hidden__tab__edit');
			$('body').addClass('body');
		});

		$('.ship').click(()=>{
			$('.hidden__tab').css('visibility', 'visible');
			$('.free__ship').addClass('hidden__tab__edit');
			$('body').addClass('body');
		});

		$('.return').click(()=>{
			$('.hidden__tab').css('visibility', 'visible');
			$('.policy__return').addClass('hidden__tab__edit');
			$('body').addClass('body');
		});

		$('.close').click(function(){
			$(this).parent().removeClass('hidden__tab__edit');
			$('.hidden__tab').css('visibility', 'hidden');
			$('body').removeClass('body');
		});

		const hiddenTab = document.getElementsByClassName('hidden__tab');

		$(window).click(event => {
			if(event.target == hiddenTab[0]){
				$('.policy__return').removeClass('hidden__tab__edit');
				$('.choose__size').removeClass('hidden__tab__edit');
				$('.free__ship').removeClass('hidden__tab__edit');
				$('.hidden__tab').css('visibility', 'hidden');
				$('body').removeClass('body');
			}
		});
		


		// CountDown Time
		// -----------------------------
		var countDownDate = new Date("feb 1, 2021").getTime();

		var x = setInterval(function() {
		  	var now = new Date().getTime();
		  	var distance = countDownDate - now;

		  	var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		  	var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		  	var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		  	var seconds = Math.floor((distance % (1000 * 60)) / 1000);
		    
		    $('#days').text(days);
		    $('#hours').text(hours);
		    $('#mins').text(minutes);
		    $('#secs').text(seconds);

		  	if (distance < 0) {
		    	clearInterval(x);
		    	document.getElementById("demo").innerHTML = "EXPIRED";
		  	}
		}, 1000);

		// $(document).ready(function(){
		//   	$('[data-toggle="tooltip"]').tooltip();
		// });