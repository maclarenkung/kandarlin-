
$( document ).ready(function() {
	$(window).load(function(){
	
		
	});

	////////////////////////////////////////////////////
	//================= SWIPER
	////////////////////////////////////////////////////

	var sec_banner = new Swiper('.sec-banner .swiper-container', {
		speed: 600,
		pagination: {
		  el: '.swiper-pagination',
		  clickable: true,
		},
		navigation: {
		  nextEl: '.swiper-button-next',
		  prevEl: '.swiper-button-prev',
		},
	  });
});


