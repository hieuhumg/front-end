(function($) { // Begin jQuery
    // caroudel
    $('#cemetery').owlCarousel({
        loop:1,
        nav:true,
        dots: false,
        navigationText: [
            "<i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i>",
            "<i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            }
        }
    });
    $('.next').show();
    $('.prev').show();
})(jQuery); // end jQuery