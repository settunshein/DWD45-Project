$('.js-scroll-trigger').click(function () {
    $('.navbar-collapse').collapse('hide');
});

var navbarCollapse = function () {
    if ($(".navbar").offset().top > 100) {
        $(".navbar").addClass("navbar-scrolled");
    } else {
        $(".navbar").removeClass("navbar-scrolled");
    }
};
navbarCollapse();

$(window).scroll(navbarCollapse);