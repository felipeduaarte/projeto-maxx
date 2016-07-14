$(document).foundation();


$(document).ready(function(){
	// MENU ATIVO
	var url = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
	$("#menuTopo a").each(function(){
	     if($(this).attr("href") == url || $(this).attr("href") == '')
	     	$(this).children('li').addClass("menu-ativo");		     	     
	});


	// MENU MOBILE
	$(".menu-mobile").click(function(){
		$("#navegacao-menu-mobile").slideToggle("fast");
	});


	// MENU ATIVO MOBILE
	$("#navegacao-menu-mobile li a").each(function(){
	     if($(this).attr("href") == url || $(this).attr("href") == '' )
	     $(this).addClass("menu-mobile-ativo");		     	     
	});




	


	// BUSCA
	$(".busca").click(function(){
		$("#menuTopo").hide();
		$(".inputs-busca2, .btn-buscar").slideToggle("fast");
	});




	
	// BUSCA-MOBILE
	$(".procurar-mobile").click(function(){
		$("#inputs-busca-mobile, #btn-buscar-mobile").slideToggle("fast");
	});











 	//EFEITO PARALLAX
   $('div.bgParallax').each(function(){
    	var $obj = $(this);
   });	


   $("#Glide").glide({
        type: "carousel"
    });





});









