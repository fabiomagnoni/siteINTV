jQuery.noConflict();

jQuery(document).ready(function($) {

	/* Mousewheel page scroll */
	$("body,html").mousewheel(function(e, delta) {
		e.preventDefault();
		this.scrollLeft -= (delta * 400);
	});


	$('.goTo').click(function(e){
		e.preventDefault();

        var anchor = $(this);

        $('html, body').stop().animate({
            scrollLeft: $(anchor.attr('href')).offset().left
        }, 1500);
    });

    $('.slides').cycle({
    	fx:'scrollHorz',
		pager:'#slideBullet',
		timeout : 8000
    });

    $('#testimonials').cycle({
		timeout : 8000
    });

    $('a#view_map').fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
        helpers : {
            media : {}
        }
    });

    $('a#view_map').click(function(e){
        e.preventDefault();
    });

    $('.goTo').click(function(e){
    	e.preventDefault();
    	var anchor = $(this)
        $('html, body').stop().animate({
            scrollLeft: jQuery(anchor.attr('href')).offset().left
        }, 1000);
    });

    /* CAREERBOARD */
    $('#jobs .item').not('.first').click(function(e){
        var id = $(this).data('id');
        // var content = getJobDescription(id);
        $('#jobs .item').fadeOut(500);
        $('#jobs #job-'+ id).delay(800).fadeIn(500);
    });

    $('#jobs a.return').live('click', function(e){
        e.preventDefault();
        $('#jobs .the_content').fadeOut(500);
        $('#jobs .item').delay(800).fadeIn(500);
    });

    $('#jobs a.apply').click(function(e){
        e.preventDefault();
        $('#jobs .the_content').fadeOut(500);
        $('#jobs #apply-form #job_title').val($('#jobs .the_content h1:first').text());
        $('#jobs #apply-form').delay(800).fadeIn(500);
    });

    $('#jobs #apply-form').validate({
        rules : {
            'name' : 'required',
            'phone' : 'required',
            'email' : {
                email : true,
                required : true
            }
        },
        messages : {
            'name' : 'Name is required',
            'phone' : 'Phone is required',
            'email' : {
                required : 'Email is required',
                email : 'Valid email is required'
            }
        },
        submitHandler : function(form){
            $(form).find('input[type="submit"]').val('Submitting application. Please wait...').attr('disabled','disabled');
            $.ajax({
                url : hy.ajaxurl,
                data : $(form).serializeArray(),
                dataType : 'json',
                type : 'post',
                success : function(data){
                    alert(data.message);
                    $(form).find('input[type="submit"]').val('Submit').removeAttr('disabled');
                    $(form)[0].reset();
                    $('#jobs #apply-form').fadeOut(500);
                    $('#jobs .item').delay(800).fadeIn(500);
                }
            })
            // return false;
        }
    });


    

});
