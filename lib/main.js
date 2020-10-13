jQuery(function($){
	$(document).on('scroll', function(){
		offset = window.pageYOffset;
		$('.background-parallax').css({
			'background-position': 'center '+ (offset/1.6) + 'px'
		})
		if (offset > 0)
			$('body').addClass('scrolled')
		else
			$('body').removeClass('scrolled')
	})

	offset = window.pageYOffset;
	$('.background-parallax').css({
		'background-position': 'center '+ (offset/1.6) + 'px'
	})
	if (offset > 0)
		$('body').addClass('scrolled')
	else
		$('body').removeClass('scrolled')

	$('a[href="#"]').on('click', function(e){
		$('html, body').animate({scrollTop: 0}, 500)
		$(this)	
	       	.parent()
	       	.parent()
	       	.children('li')
	       	.children('a')
	       	.removeClass('selected')
	    $(this).addClass('selected')
		e.preventDefault()
	})
	$('a[href="#form-ehtua"]').on('click', function(e){
		go_to = $('#form-ehtua').offset().top
		if(window.innerWidth > 768)
			offset_to = 130;
		else
			offset_to = 50;
		$('html, body').animate({ scrollTop : go_to - offset_to})
		e.preventDefault()
	})
	$('a[href*="#"]')
	  .not('[href="#"]')
	  .not('[href="#0"]')
	  .not('[href="#form-ehtua"]')
	  .click(function(event) {
	    if (
	      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
	      && 
	      location.hostname == this.hostname
	    ) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	      if (target.length) {
	        event.preventDefault();
	        $(this)	
	        	.parent()
	        	.parent()
	        	.children('li')
	        	.children('a')
	        	.removeClass('selected')

	        $(this).addClass('selected')
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000, function() {
	          var $target = $(target);
	          $target.focus();
	          if ($target.is(":focus")) {
	            return false;
	          } else {
	            $target.attr('tabindex','-1');
	            $target.focus();
	          };
	        });
	      }
	    }
	  });

	// submiting form

	$('form[rel="contact"]').submit(function(e){
		$elem = $(this)
		form_data = $elem.serialize() + '&action=send'
		$.ajax({
			url: plainscripts.ajax_url,
			type: 'POST',
			data: form_data,
			beforeSend: function(){
				$elem.addClass('form-loading')
				$('.alert-message').fadeOut()
			},
			success: function(e){
				$elem.removeClass('form-loading');
				if (!e.success)
				{
					$('#go-to_form').click();
					for(i=0; i < e.content.length; i++)
					{
						$(e.content[i].ID).parent().children('.alert-message').fadeIn();
					}
				}
				else
				{
					$elem[0].reset();
					$('.alert-message').fadeOut();
					$('#submit-btn').parent().children('.alert-message').fadeIn();
				}
			}
		})
		e.preventDefault();
	})

	$('.menu-toggle').on('click', function(){
		$('body').toggleClass('menu-open')
	})
	$('.responsive-menu .menu-content ul li a').on('click', function(){
		$('body').removeClass('menu-open')
	})
})