$(document).ready(function() {
        $(window).scroll(function() {
            if($(window).scrollTop() > 0) {
                $(".navBar").css("top", 105-$(window).scrollTop() + 'px');
                        if($(window).scrollTop()> 102) {
                                $(".navBar").css("top", '0px');
                        }
            }
            if($(window).scrollTop() == 0) {
                    $(".navBar").css("top", "105px");
            }
        }); 
            $(winodw).load(function() {
                if($(window).scrollTop() > 103 ) {
                        $(".navBar").css("top",'0px');
                } 
            });
    });