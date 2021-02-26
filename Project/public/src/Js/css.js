// Thu bé header Master Blade
// -----------------------
$(window).scroll(function (event) {
    if($(window).scrollTop() > 200){
    	$('.header').addClass('header__edit');
    	$('.user__item').css('top', '2.2vw');
    }
    else{
    	$('.header').removeClass('header__edit');
    	$('.user__item').css('top', '2.6vw');
    }
});


// Menu Hidden Master Blade
// -----------------------
let MenuHidden = () => {
	
	// Mở Menu Hidden
	// -----------------------
	$('.menu i').click(()=>{
		$('.menu__hidden').addClass('menu__hidden__edit');
	});

	// Đóng Menu Hidden
	// -----------------------
	$('.close').click(()=>{
		$('.menu__hidden').removeClass('menu__hidden__edit');
	});
}

MenuHidden();

$('.user__drop').mouseover(()=>{
	$('.user__item').addClass('user__item__edit');
});
$('.user__item').mouseover(()=>{
	$('.user__item').addClass('user__item__edit');
});

$('.user__drop').mouseout(()=>{
	$('.user__item').removeClass('user__item__edit');
});
$('.user__item').mouseout(()=>{
	$('.user__item').removeClass('user__item__edit');
});