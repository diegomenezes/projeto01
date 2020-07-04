$(function(){
	var open = true;
	var windowSize = $(window)[0].innerWidth;

	var targetSizeMenu = (windowSize <= 400) ? 200 : 300;

	if(windowSize <= 768){
		$('aside').css('width','0').css('padding','0');
		open = false;
	}

	$('.menu-btn').click(function(){
		if(open){
			//o menu está aberto
			$('aside').animate({'width':0,'padding':0},function(){
				open = false;
			});
			$('header,.content').css({'width':'100%'});
			$('header,.content').animate({'left':0},function(){
				open = false;
			});
		}else{
			//o menu está fechado
			$('aside').css('display','block');
			$('aside').animate({'width':targetSizeMenu+'px','padding':'10px'},function(){
				open = true;
			});
			$('header,.content').animate({'left':targetSizeMenu+'px'},function(){
				open = true;
			});
		}
	})


	$(window).resize(function(){
		windowSize = $(window)[0].innerWidth;
		if(windowSize <= 768){
			$('aside').css('width','0').css('padding','0');
			$('.content,header').css('width','100%').css('left','0');
			open = false;
		}else{
			$('.content,header').css('width','calc(100% - 250px)').css('left','250px');
			$('aside').css('width','250px').css('padding','10px 0');
			open = true;
		}

	})
})