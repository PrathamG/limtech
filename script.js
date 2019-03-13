$(function()
{
	$("a").click(function()
	{
		if (this.hash !== "") 
		{
	      event.preventDefault();
	      var hash = this.hash;
	      $('html, body').animate
	      (
	      	{scrollTop: $(hash).offset().top - 40},
	      	600,
	      	function()
	      	{
	        	window.location.hash = hash;
      		}
	      );
	    }
	});

	if($(window).width() > 900)
	{
		$(window).scroll(function()
		{
		    if ($(this).scrollTop() >= 100) 
			{
				
				$("#fixnav").slideDown(200);
			}
			else
			{
				$("#fixnav").slideUp(200);
			}
		});
	}

	if($(window).width() < 900)
	{
		$(window).scroll(function()
		{
		    if ($(this).scrollTop() >= 400) 
			{
				
				$(".top-btn").fadeIn(200);
			}
			else 
			{
				$(".top-btn").fadeOut(200);
			}
		});
	}

	$(".mobmenu").click(function()
	{
		if(!$('.moblist').is(":visible"))
		{
			$(".mobnav .fas").hide();
			$(".mobnav .far").show();
			$('.moblist').fadeIn(100);
		}
		else
		{
			$(".mobnav .far").hide();
			$(".mobnav .fas").show();
			$('.moblist').fadeOut(100);
		}
	});

	$(".moblink").click(function()
	{
		$(".mobnav .far").hide();
		$(".mobnav .fas").show();
		$('.moblist').fadeOut(100);
	});
});

