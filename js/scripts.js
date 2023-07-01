//////////////////////////////26/05/2023////////////////////////// by Afolabi Taiwo Abayomi(Ttech)


$(window).scroll(function() { 
  var scrollheight = $(window).scrollTop();
  	if (scrollheight >= 100) {
		$("#back2Top").fadeIn(1000);
		$("#header").css("width", "100%");
		$("#header").css("position", "fixed");
		$("#header").css("margin", "0px 0px 0px 0px");
	
	} else {
		$('#back2Top').fadeOut(1000);
		$("#header").css("width", "90%");
		$("#header").css("position", "absolute");
		$("#header").css("margin", "30px 0px 0px 5%");
	}
});

function _back_to_top(){
		event.preventDefault();
		$("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
}


function _open_live_chat(){
	   $('.sidenavdiv, .sidenavdiv-in').animate({'margin-left':'0'},200);
	   $('.index-menu-back-div').animate({'margin-left':'-100%'},400);
	   $('.live-chat-back-div').animate({'margin-left':'0'},400);
}
function _close_side_nav(){
	   $('.sidenavdiv, .sidenavdiv-in').animate({'margin-left':'-100%'},200);
	   $('.index-menu-back-div,.live-chat-back-div').animate({'margin-left':'-100%'},400);
}


function _switch_cookies(id){
	var x = document.getElementById(id);
	  if (x.innerHTML === '<img src="'+website_url+'/all-images/images/switch-off.jpg">') {
		x.innerHTML = '<img src="'+website_url+'/all-images/images/switch-on.jpg">';
	  }else{
		x.innerHTML = '<img src="'+website_url+'/all-images/images/switch-off.jpg">';
	  }
}















