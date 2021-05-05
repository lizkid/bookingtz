$('.common_class').click(function(){
	$('.common_class').removeClass('active');   // it remove all the active links
	$(this).addClass('active');    // it adds active class to the current link you have opened
})
// $('#drop1').click(function (){
// 	$('.first').toggleClass('rotate');
// });
// $('#drop2').click(function (){
// 	$('.second').toggleClass('rotate');
// });
// $('#drop3').click(function (){
// 	$('.third').toggleClass('rotate');
// });
// $('#drop4').click(function (){
// 	$('.fourth').toggleClass('rotate');
// });
//
// $('#drop5').click(function (){
// 	$('.fifth').toggleClass('rotate');
// });

 $('.common').click(function(){
 	$('.common').addClass('active');
 	$(this).removeClass('active');
 });
$(document).ready(function() {
	$('#sidebar-wrapper ul li:has(ul)').click(function(e) {
		e.preventDefault();

		if($(this).hasClass('activado')) {
			$(this).removeClass('activado');
			$(this).children('ul').slideUp();
		} else {
			$('#sidebar-wrapper ul li ul').slideUp();
			$('#sidebar-wrapper ul li').removeClass('activado');
			$(this).addClass('activado');
			$(this).children('ul').slideDown();
		}

		$('#sidebar-wrapper ul li ul li a').click(function() {
			window.location.href = $(this).attr('href');
		})
	});
});


$(document).ready(function(){
	$("#mobile").click(function(){
		$("#sidebar-wrapper").toggleClass("toggled");
		$("#page-content-wrapper").toggleClass("toggled2");
	});
});


$(document).ready(function () {
    $( "#sidebar-wrapper ul li" ).click( function(){


        $(this).find('.fa-angle-down').toggleClass('rotate');

    });
});
// $(document).click(function(e){
//     if(!e.target.closest("#sidebar-wrapper ul li") && $(".fa-angle-down").hasClass("rotate")){
//         $(".fa-angle-down").removeClass('rotate');
//     }
// })
