// =======================================
//
//	Smooth Scroll
//
// =======================================

$(function(){
	$('a[href^=#]').click(function(){
		var speed = 500;
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top;
		$("html, body").animate({scrollTop:position}, speed, "swing");
		return false;
	});
});

// =======================================
//
//	PageTop
//
// =======================================

$(function(){
    $('#pagetop').click(function () {
        $('body,html').animate({
        scrollTop: 0
        }, 1000);
        return false;
     });
});
$(function() {
    var topBtn = $('#pagetop'); 
    topBtn.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
});

$(function(){
    $('#pagetop_sp').click(function () {
        $('body,html').animate({
        scrollTop: 0
        }, 1000);
        return false;
     });
});

// =======================================
//
//  Menu
//
// =======================================

$(document).ready(function () {
  // DOM variables
  let submenuDesktopButton = $('.extra-content__submenu'),
  hamburguerMenu = $('.menu'),
  submenuMobileButton = $('.submenu'),
  submenuSelector = '.extra-content__submenu-selector';

  submenuDesktopButton.on('click', function () {
    $(this).toggleClass('is-open');

    toggleARIA($(this).find(submenuSelector), 'aria-expanded');
    toggleARIA($(this).find(submenuSelector), 'aria-hidden');
  });
  hamburguerMenu.on("click", function () {
    $('header').toggleClass('is-open');

    toggleARIA($('header'), 'aria-hidden');
  });
  //hamburguerMenu.on("click", function () {
    //$(this).parent().parent().toggleClass('is-open');

    //toggleARIA($(this).parent().parent(), 'aria-hidden');
  //});

  submenuMobileButton.on('click', function () {
    $(this).toggleClass('is-open');

    toggleARIA($(this), 'aria-expanded');
  });
});

// Toggle ARIA attributes
function toggleARIA(selector, ARIA) {
  selector.attr(ARIA, function (i, attr) {
    return attr == 'true' ? 'false' : 'true';
  });
}