$(function() {
	// body...

	var curSlider = 0;

	var maxSlide = $('.banner-single').length - 1;

	var delay = 3;

	initSlider();
	changeSlide();

	function initSlider(){
		$('.banner-single').hide();
		$('.banner-single').eq(0).show();
		for(var i = 0; i < maxSlide+1; i++){
			var content = $('.bullets').html();
			if(i == 0)
				content+='<span class="active-slider"></span>';
			else
				content+='<span></span>';
			$('.bullets').html(content);
		}
	}//init-slider

	function changeSlide(){
		setInterval(function(){
			$('.banner-single').eq(curSlider).stop().fadeOut(2000);
			curSlider++;
			if (curSlider > maxSlide)
				curSlider = 0;
			$('.banner-single').eq(curSlider).stop().fadeIn(2000);
			//trocar bullets active
			$('.bullets span').removeClass('active-slider');
			$('.bullets span').eq(curSlider).addClass('active-slider');
		},delay * 1000);
	}//change-slide