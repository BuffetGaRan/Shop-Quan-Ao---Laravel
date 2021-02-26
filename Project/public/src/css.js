// Thu bé header Master Blade
// -----------------------
$(window).scroll(function (event) {
    if($(window).scrollTop() > 400){
    	$('.header').addClass('header__edit');
    }
    else{
    	$('.header').removeClass('header__edit');
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
