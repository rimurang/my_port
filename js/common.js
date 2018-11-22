$(document).ready(function(){
    

    $(window).scroll(function(){

		var scrollPos = $(window).scrollTop();
        var windwith = $(window).width();
        var sli01 = $('.bigb_left');
        var sli02 = $('.pfl_txt');

    if(windwith<1500){
        sli01.addClass('shown');
        sli02.addClass('shown');
    }
		if(scrollPos>=15){
			$('#header_top').addClass('fixed');
            sli01.addClass('shown');
            sli02.addClass('shown');
		}else{
			$('#header_top').removeClass('fixed');
            sli01.removeClass('shown');
            sli02.removeClass('shown'); 
		}

    });

    // if($windwith<1500){
    //     $sli01.addClass('shown');
    //     $sli02.addClass('shown');
    // }


    $('.faqtab li p').click(function(){
        $('.faqtab li p').removeClass('on');
        $(this).addClass('on');

        var submenumb = $(this).next(".answr");
        if( submenumb.is(":visible") ){
            submenumb.slideUp();
            $(this).removeClass('on');
        }else{
            $('.answr').slideUp();
            submenumb.slideDown();

        }

    });
     


    
});

