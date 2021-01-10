$(document).ready(function(){
		$('.menu').hover(function(){Enter('.menu .pop');},function(){Leave('.menu .pop');});
			$('.user-new-chat').hover(function(){Enter('.chat .pop');},function(){Leave('.chat .pop');});
	$('.status').hover(function(){Enter('.status .pop');},function(){Leave('.status .pop');});
	 
		function Enter(x){
			$(x).css('visibility','visible');
			$(x).css('transition-delay','0.5s');
		}
		function Leave(x){
			$(x).css('visibility','hidden');
			$(x).css('transition-delay','0s');
		}


                // appering arrow js coding is down
			$(".content-box1").on('mouseenter',check);
			var ele;
	function check(){
		 ele=$('.content-box1').index(this);
         // var take=document.getElementsByClassName('content-box1')[ele];
       }
    // console.log(ele);   checking the result of class index...
       	$('.content-box1').hover(function(){arrowEnter('.content-box1:eq('+ele+') .arrow');},function(){arrowLeave('.arrow');});
          function arrowEnter(x){
            $(x).css('left','320px');
          
          }
          function arrowLeave(x){
          	$(x).css('left','400px');
          
          }
	              // appering arrow js code is above
	});