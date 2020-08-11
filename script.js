$(function()
{
	//Same page animated scrolling
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

	//Toggles display of fixed navbar based on scrolling
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
				$("#fixnav").hide();
			}
		});
	}

	//Scroll to page top on top-button click
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

	//Toggles display of mobile navigation menu
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

	//Hides mobile navigation menu when something in the menu is clicked
	$(".moblink").click(function()
	{
		$(".mobnav .far").hide();
		$(".mobnav .fas").show();
		$('.moblist').fadeOut(100);
	});

	//Prevents scrolling when popup is visible
	if($('.popup').is(":visible"))
	{
		$('body').css('overflow', 'hidden');
	}

	//Toggles display of popup 
	$(".toggle-popup").click(function()
	{
		if(!$('.popup').is(":visible"))
		{
			$(".popup").fadeIn(100);
			$('body').css('overflow-y', 'hidden');
		}
		else
		{
			$(".popup").fadeOut(100);
			$('body').css('overflow-y', 'scroll');
		}	
	});

	//Toggles display of popup form
	$(".popup-form-toggle").click(function()
	{

		if(!$('#popup-2').is(":visible"))
		{
			console.log('babbu-lala');
			$("#popup-1").hide();
			$("#popup-2").fadeIn(100);
		}
		else
		{
			$("#popup-2").hide();
			$("#popup-1").fadeIn(100);
		}
	});

});

