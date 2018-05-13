/**
* @file
* Filename:     custum.js.
* Website:      http://www.ordasoft.com
* Description:  file custom javascript
* Author:       ordasoft dev team ordasoft.com.
*/

jQuery(document).ready(function () {
 if (jQuery("[rel=tooltip]").length) {jQuery("[rel=tooltip]").tooltip();}
 	//jQuery('.fancybox').fancybox();
// _______________________________________________ Main Swiper slideshow


// _______________________________________________ switch Button
	jQuery('.switchButton span').click(function() {
		var page = jQuery('#wrapper').removeClass();
	    if (jQuery(this).hasClass('bt-blue')) page.addClass('default');
	    if (jQuery(this).hasClass('bt-lghtGre')) page.addClass('divLghtGreen');
	    if (jQuery(this).hasClass('bt-orange')) page.addClass('divOrange');
	    if (jQuery(this).hasClass('bt-red')) page.addClass('divRed');
	    if (jQuery(this).hasClass('bt-green')) page.addClass('divGreen');
	    if (jQuery(this).hasClass('bt-purple')) page.addClass('divPurple');
	});
    jQuery('.scrollup').click(function(){jQuery('html, body').animate({ scrollTop: 0 }, 600);return false;});
// ______________________________________global responsive menu
	var gmenu = jQuery('.mainMenu ul.menu');
        gmenu.find('ul').has('li').removeClass('menu');
        gmenu.find('li').has('ul').addClass('parent');
        gmenu.find('li').has('a.active').addClass('active');
        gmenu.find('li.parent > a').removeAttr('href').next('ul').hide();
        gmenu.find('li.parent > a').append('<span class="arrow"></span>');

		function clickOrHover(){
			if (jQuery(window).width() >= 980) return true;
			return false
		}
		    gmenu.find('li.parent').hover(function() {
		        if (clickOrHover() && !jQuery(this).children('ul').is(':visible')) {
		            jQuery(this).children('ul').stop().slideDown(100);
		        }
		    },
		    function() {
		        if (clickOrHover() && jQuery(this).children('ul').is(':visible')) {
		            jQuery(this).children('ul').slideUp(100);
		        }
		    });

		    gmenu.find("li.parent a").click(function(){
		        var checkElement = jQuery(this).next();
		        if (checkElement.is('ul')) {
		            if (!checkElement.is(':visible')) {
		                checkElement.slideDown(100);
		            } else {
		                checkElement.slideUp(100);
		            }
		        }
		    });


	jQuery(".maimMenu .menu").addClass('nav navbar-nav');
	jQuery(".menu li a + ul").addClass('red');

 });
  

jQuery(window).load(function() {

});
