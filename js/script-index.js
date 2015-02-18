$(document).ready(function(){
    
    $(".social-icon").tooltip();
    
    $(window).scroll(function(){
        var scroll_top = $(window).scrollTop();
        
        if (scroll_top > 575) {
            $(".navbar").css('visibility','visible').fadeIn();
        }
        else{
            $(".navbar").fadeOut();
        }
    });
});