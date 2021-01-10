
$(document).ready(function(){    
    $('.user-img').on('click',open);

    function open(){
    	$('.pro-container').toggleClass('active');
    	$('.pro-head-content').toggleClass('active');
    }

    //below is hover function copy in hover.js 
    $('.pro-img').hover(function(){
    	    $('.change-image').addClass('active');
    },function(){
    	 $('.change-image').removeClass('active');
    	});
     $('.change-image').hover(function(){
    	    $('.change-image').addClass('active');
    },function(){
    	 $('.change-image').removeClass('active');
    	});

});