/*global $, alert, console*/
var signup_login = false;

$('#show').on('click', function (signup) {
	"use strict";
    $('#signup').toggleClass('show');

    if (!signup_login) {
		signup.target.innerHTML = "تسجيل الدخول";
	} else {
        signup.target.innerHTML = "سجل الان";
		
	}
    signup_login = !signup_login;

});
$(function () {
   
    'use strict';
    
});
    // Caching The Scroll Top Element
	
    
var scrollButton = $(".scroll_top");

$(window).scroll(function () {
    'use strict';
	
    if ($(this).scrollTop() >= 500) {
            
        scrollButton.show();
            
    } else {
            
        scrollButton.hide();
    }
});
    
    // Click On Button To Scroll Top
    
scrollButton.click(function () {
    'use strict';

    $("html,body").animate({ scrollTop : 0 }, 600);
        
});
		
			// scroll to home	
$(".link-home").click(function () {
	"use strict";
    $("html, body").animate({
        scrollTop: $(".slider-show").offset().top
    }, 1000);
});
		
			// scroll to about	
$(".link-about").click(function () {
	"use strict";
    $("html, body").animate({
        scrollTop: $(".about-us").offset().top
    }, 1000);
});
    
		
			// scroll to contact	
$(".link-contact").click(function () {
	"use strict";
    $("html, body").animate({
        scrollTop: $(".contact").offset().top
    }, 1000);
});
    //links ADD Active Class
    
$('.collapse li a').click(function () {
    "use strict";
    $(this).parent().addClass('active').siblings().removeClass('active');
});