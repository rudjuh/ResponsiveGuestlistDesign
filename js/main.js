$(document).ready(function() { 
	 //scroll function
	
	$(window).scroll(function () {
		if($(window).width() > 992){
			if ($(this).scrollTop() > 150) {
				$('.nav-wrapper').addClass('navbar-fixed-top');
				//$('.navbar-brand').css("display", "block");
			} else {
				$('.nav-wrapper').removeClass('navbar-fixed-top');
				//$('.navbar-brand').css("display", "none");
			}
		};
    });
	if($(window).width() < 992){
		$('nav').addClass('navbar-fixed-top');
		$('#navbrand').addClass('navbar-wrapper');
		$('.player').css("margin-top", "0px");
		$('.top-menu-wrapper').css("display", "none");
		$('#account-wrapper').removeClass('account-container-wrapper');
	};
	if($(window).width() > 988){
		$('#account-wrapper').addClass('account-container-wrapper');
		$('.top-menu-wrapper').css("display", "block")
	};
	
	
		$(window).bind('resize', function(e){
		window.resizeEvt;
		$(window).resize(function(){
			clearTimeout(window.resizeEvt);
			window.resizeEvt = setTimeout(function(){
			
           		if($(window).width() < 988){
					$('nav').addClass('navbar-fixed-top'); 
					$('#navbrand').addClass('navbar-wrapper');
					$('.player').css("margin-top", "0px");
					$('#account-wrapper').removeClass('account-container-wrapper');
					$('.top-menu-wrapper').css("display", "none");
					//$('.top-menu-wrapper').css("display", "none");
				};
				
				if($(window).width() > 988){
					$('#account-wrapper').addClass('account-container-wrapper');
					$('nav').removeClass('navbar-fixed-top'); 
					$('#navbrand').removeClass('navbar-wrapper');
					$('.player').css("margin-top", "-50px");
					$('.top-menu-wrapper').css("display", "block")
					//$('.top-menu-wrapper').css("display", "block");
				};
				}, 250);
		});
	}); 
	//check if divice is ios

	////Give classes after resizing the page/////
	
});
