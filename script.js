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
	      	{scrollTop: $(hash).offset().top - 50},
	      	600,
	      	function()
	      	{
	        	window.location.hash = hash;
      		}
	      );
	    }
	});

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
});
