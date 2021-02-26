// Product Page
// -----------------------------
$('#btn__filter').click(()=>{
	$('.filter__hidden').addClass('filter__hidden__edit');
});

$(window).click(function(e){
	let range = $('.filter__hidden').outerWidth();
	if(e.pageX > range){
		$('.filter__hidden').removeClass('filter__hidden__edit');
	}
});

$('.btn__search').click(function(){
	$('.txt__search').toggleClass('txt__search__edit');
	$('.txt__search').val('');
	$(this).toggleClass('btn__search__edit');
});

for(let i = 0; i < $('.dropdown-item').length; i++){
	
	$('.dropdown-item').eq(i).click(function(){
		$('.dropdown-toggle').html($(this).html());
	});
	$('.dropdown-item').eq(0).click(function(){
		$('.dropdown-toggle').html('Sort');
	});
}
