// function loadpage(page){
// 	$.ajax({
// 		url:'assets/pages/'+page+'.html',
// 		dataType:'html',
// 		cache: false,
// 		success: function(response){
// 			$('#main_content').html(response);
// 		}
// 	})
// }

// $(document).ready(function(){
// 	$('.home_link').click(function(){
// 		loadpage('home');
// 	})
// 	$('.contact_link').click(function(){
// 		loadpage('contact');
// 	})
// 	$('.about_link').click(function(){
// 		loadpage('about');
// 	})
// 	$('.services_link').click(function(){
// 		loadpage('services');
// 	})

// });

$(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a') ) {
        $(this).collapse('hide');
    }
});


