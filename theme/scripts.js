(function($) {
	
	var midbot = $( "#main-midbot-container" );
	var link_flag, anim_flag;
	var all_content = "#logo, #lista-trabalhos, #trab-logo,.outro-conteudo";
	
	//testar posicao
	$.fn.testarPos = function() {
		var position2 = midbot.position();
		var scroll = $(window).scrollTop();
		
		//expandir menu
		if (anim_flag==1) {
			anim_flag=0;
			$("#main-logo-title a").animate({fontSize:"30px"});
			$("#main-logo-icon a").animate({fontSize:"45px"});
			$("#main-logo-icon, #main-logo-title").animate({height: "35px"});
			$(".main-page-nav li").animate({padding: "14px 11px 9px 11px",fontSize: "15px"});	
		}
		if (anim_flag==2) {
			anim_flag=0;
			$("#main-logo-title a").animate({fontSize:"20px"});
			$("#main-logo-icon a").animate({fontSize:"30px"});
			$("#main-logo-icon, #main-logo-title").animate({height: "25px"});
			$(".main-page-nav li").animate({padding: "11px 5px",fontSize: "13px"});
		} 
		//indicar o link
		if ((scroll < position2.top*0.5) && link_flag!=1){
			link_flag=1;
			anim_flag = 1;
			$("#menu-item-80").css("background-color","#333");
			$("#menu-item-81").css("background-color","#000");
			$("#menu-item-82").css("background-color","#000");
			$(all_content).css({
					"opacity":"1",
					"filter":"Alpha(opacity=100)"
			});
			//animar conteudo
			if ($( window ).width() > 640) {
				$(".outro-conteudo").css("display","none");	
				$("#lista-trabalhos, #trab-logo").fadeOut( "fast" );
				$("#logo").fadeIn( "fast" );
			} else {
				$("#logo").css({
					"display":"block",
					"opacity":"1",
					"filter":"Alpha(opacity=100)"
				});
				$("#lista-trabalhos, #trab-logo,.outro-conteudo").css({
					"display":"block",
					"opacity":".5",
					"filter":"Alpha(opacity=50)"
				});
			}
		}
		if ( ( (scroll >= position2.top*0.5) && (scroll < position2.top+$( window ).height()*0.45) ) && link_flag!=2){
			link_flag=2;
			anim_flag = 2;
			$("#menu-item-80").css("background-color","#000");
			$("#menu-item-81").css("background-color","#333");
			$("#menu-item-82").css("background-color","#000");
			$(all_content).css({
				"opacity":"1",
				"filter":"Alpha(opacity=100)"
			});
			//animar conteudo
			if ($( window ).width() > 640) {
				$("#logo, .outro-conteudo").fadeOut( "fast" );
				$("#lista-trabalhos, #trab-logo").fadeIn( "fast" );
			} else {
				$("#lista-trabalhos, #trab-logo").css({
					"display":"block",
					"opacity":"1",
					"filter":"Alpha(opacity=100)"
				});
				$("#logo,.outro-conteudo").css({
					"display":"block",
					"opacity":".5",
					"filter":"Alpha(opacity=50)"
				});	
			}
		}
		if ((scroll > position2.top+$( window ).height()*0.55) && link_flag!=3){
			link_flag=3;
			anim_flag = 2;
			$("#menu-item-80").css("background-color","#000");
			$("#menu-item-81").css("background-color","#000");
			$("#menu-item-82").css("background-color","#333");
			$(all_content).css({
				"opacity":"1",
				"filter":"Alpha(opacity=100)"
			});
			//animar conteudo
			if ($( window ).width() > 640) {
				$("#logo").css("display","none");	
				$("#lista-trabalhos, #trab-logo").fadeOut( "fast" );
				$(".outro-conteudo").fadeIn( "fast" );
			} else {
				$(".outro-conteudo").css({
					"display":"block",
					"opacity":"1",
					"filter":"Alpha(opacity=100)"
				});
				$("#logo, #lista-trabalhos, #trab-logo").css({
					"display":"block",
					"opacity":".5",
					"filter":"Alpha(opacity=50)"
				});
			}
		}
	};

	//testar posicao quando rolar
	$(window).scroll(function (event) {
		$(this).testarPos();
	});
	
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
	
	//fade-in_out	
	$(window).on( "load", function() {
		$("#logo").css({
			"height" : $( window ).height()+"px"
		});
		$(this).testarPos();
		$("#fade").fadeOut( "fast" );
    });
	
	//animar botoes
	if ($( window ).width() > 640) {
		$(".page-anc p").hover(function(){
			if ($( window ).width() > 640){ $(this).animate({ marginBottom: "10px" },200); }
		}, function(){
			if ($( window ).width() > 640){ $(this).animate({ marginBottom: "0"	},200); }
		});
		$(".trab-item-link, .trab-item-lista").hover(function(){
			if ($( window ).width() > 640){ $(this).animate({ opacity: "1" },200); }
		}, function(){
			if ($( window ).width() > 640){ $(this).animate({ opacity: "0.9" },200); }
		});
	}
	
})( jQuery );