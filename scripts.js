(function($) {
	
	//transicao suave
	$("a").on('click', function(event) {
		if (this.hash !== "") {

			event.preventDefault();
			var hash = this.hash;

			$('html, body').animate({
				scrollTop: $(hash).offset().top
			}, 800, function(){
				window.location.hash = hash;
			});
		} 

	});
	
	//fade-in_out and ad-limit
	var div_ad = "img[alt='www.000webhost.com']";
	
	$(window).on( "load", function() {
		$("#logo").css({
			"height" : $( window ).height()+"px"
		});
		$("#logo").fadeIn( "slow" );
		$("#fade").fadeOut( "fast" );
		$(div_ad).delay(1000).fadeOut( "fast" );
    });
	
	$(window).bind('beforeunload', function(event) {
		$("#fade").fadeIn( "fast" );
		$(div_ad).fadeIn( "slow" );
	});
	
	//expandir-contrair menu
	var midbot = $( "#main-midbot-container" );
	var anim_flag = 0;
	var link_flag = 0;
	
	$(window).scroll(function (event) {
		var position2 = midbot.position();
		var scroll = $(window).scrollTop();
		//expandir ou nao
		if ((scroll >= position2.top*0.5)&&(anim_flag==0)) {
			anim_flag=1;
			$("#main-logo-title a").animate({
				fontSize:"20px"
			});
			$("#main-logo-icon a").animate({
				fontSize:"30px"
			});
			$("#main-logo-icon, #main-logo-title").animate({
				height: "25px"
			});
			$(".main-page-nav li").animate({
				padding: "11px 5px",
				fontSize: "13px"
			});
		} 
		if ((scroll < position2.top*0.5)&&(anim_flag==1)) {
			anim_flag=0;
			$("#main-logo-title a").animate({
				fontSize:"30px"
			});
			$("#main-logo-icon a").animate({
				fontSize:"45px"
			});
			$("#main-logo-icon, #main-logo-title").animate({
				height: "35px"
			});
			$(".main-page-nav li").animate({
				padding: "14px 11px 9px 11px",
				fontSize: "15px"
			});
			anim_flag=0;		
		}
		
		//indicar o link
		if ((scroll < position2.top*0.5) && (link_flag!=1)){
			$("#menu-item-80").css("background-color","#333");
			$("#menu-item-81").css("background-color","#000");
			$("#menu-item-82").css("background-color","#000");
			link_flag=1;
			$(".outro-conteudo").css("display","none");	
			$("#lista-trabalhos, #trab-logo").fadeOut( "fast" );
			$("#logo").fadeIn( "fast" );
		}
		if ( ( (scroll >= position2.top*0.5) && (scroll < position2.top+$( window ).height()*0.5) ) && (link_flag!=2)){
			$("#menu-item-80").css("background-color","#000");
			$("#menu-item-81").css("background-color","#333");
			$("#menu-item-82").css("background-color","#000");
			link_flag=2;
			$("#logo, .outro-conteudo").fadeOut( "fast" );
			$("#lista-trabalhos, #trab-logo").fadeIn( "fast" );
		}
		if ((scroll >= position2.top+$( window ).height()*0.5) && (link_flag!=3)){
			$("#menu-item-80").css("background-color","#000");
			$("#menu-item-81").css("background-color","#000");
			$("#menu-item-82").css("background-color","#333");
			link_flag=3;
			$("#logo").css("display","none");	
			$("#lista-trabalhos, #trab-logo").fadeOut( "fast" );
			$(".outro-conteudo").fadeIn( "fast" );
		}
	});
	
	//animar botoes
	$(".page-anc p").hover(function(){
		$(this).animate({
			marginBottom: "10px"
		});
	}, function(){
		$(this).animate({
			marginBottom: "0"
		});
	});
	$(".trab-item-link, .trab-item-lista").hover(function(){
		$(this).animate({
			opacity: "1"
		});
	}, function(){
		$(this).animate({
			opacity: "0.9"
		});
	});
	
	//redimensionar quando necessario
	$( window ).resize(function() {
		$("#main-midtop-container,#main-midbot-container,#main-bot-container").css({
			"width" : $( window ).width()+"px"
		});
		$("#logo").css({
			"height" : $( window ).height()+"px"
		});
	});
	
})( jQuery );