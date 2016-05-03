
$(function() {
	setNavigation();
    setUpNavbar();
});

// Sets menu item active according to url
function setNavigation(){
	$("#mainNav a").each(function() {
		if (this.href == window.location.href) {
       		$(this).addClass("btn-active");
    }
});
}

function setUpNavbar() {
    $('.nav-link a').each(function() {
        $(this).bind('click', function() {
            scrollById($(this).attr('linkTo'));
        });
    });
}

// Animates subjects navbar to go to certain sections
function scrollById(id) {
    var sectionId = '#' + id    
    var navbarHeight = $('.nav-container').height();
    
	$('html, body').animate({
        	scrollTop: $(sectionId).offset().top //- navbarHeight//- ($(sectionId).height() / 2) 
        }, 800);
}

// Keeps navbar fixed at top
// $(window).scroll(function() {
//     if ($(window).scrollTop() >= $('#WelcomeSection').offset().top + $('#WelcomeSection').height()) {
//         $('.nav-container').css('position','fixed');
//         $('.nav-container').css('top','0');
//     } 
//     else {
//         $('.nav-container').css('position','static');
//     }
// });