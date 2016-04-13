<title>Tuổi trẻ</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/css.css" type="text/css"/>
<script src="jquery/jquery-2.1.4.min.js"> </script>
<script src="jquery/jQuery-slimScroll-1.3.7/jquery.slimscroll.min.js"> </script>
<script> 
$(function(){
    $('.scroll-list').slimScroll({
        height: '310px'
		
    });
});

$(function(){
    $('.TVO-right').slimScroll({
        height: '310px'
		
    });
});

</script>
<script language="javascript" > 

var currentTitle;
var currentImg;
var currentIndex = -1;

var myTimer;



$(document).ready(function(e) {
    showNext();
	myTimer = setTimeout( "showNext()", 3000 );
});

function showNext()
{
	var len = $('.bigPics img').length;
	
	var next;
	if ( currentIndex < len - 1 )
	{
		next = currentIndex + 1;
	}
	else
	{
		next = 0;
	}
	
	showPics(next);
}

function showPics(next)
{
	
	var nextImg = $('.bigPics img')[next];
	

	$(currentImg).css('z-index',2);
	

	if ( currentImg )
	{
		
		if ( nextImg != currentImg )
		{
			clearTimeout(myTimer);
			$(currentImg).fadeOut( 500, function()
			{		
				myTimer = setTimeout( "showNext()", 3000 );	
				$(this).css({'display':'none','z-index':1})
				
			});
			
		}
		
	}
	
	$(nextImg).css({'display':'block'});

	
	currentIndex = next;
	currentImg = nextImg;
	
	 $('.slideTitle li a').removeClass('active');
		$($('.slideTitle li a')[next]).addClass('active');
	
}
</script>
