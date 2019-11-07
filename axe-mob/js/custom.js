(function($) { // Begin jQuery
    document.addEventListener("touchstart", function() {},false);
    $(function() { // DOM ready
        // If a link has a dropdown, add sub menu toggle.
        $('nav ul li a:not(:only-child)').click(function(e) {
            $(this).siblings('.nav-dropdown').toggle();
            // Close one dropdown when selecting another
            $('.nav-dropdown').not($(this).siblings()).hide();
            e.stopPropagation();
        });
        // Clicking away from dropdown will remove the dropdown class
        $('.shadow').hide();
        $('#nav-toggle').click( function () {
            $('.shadow').show();
        });

        $('#nav-toggle').click( function () {
            $('').addClass('show');
        });
        $('.shadow').click(function() {
            $('.menu-mobile').removeClass('active');
        });
        $('.shadow').click(function() {
            $('.shadow').hide();
        });
        $('.shadow').click(function() {
            $('.wrapper').removeClass('show');
        });
        $('.close').click(function () {
            $('.menu-mobile').removeClass('active');
        });
        $('.close').click(function () {
            $('.shadow').hide();
        });
        $('.close').click(function () {
            $('').removeClass('show');
        });
        // Toggle open and close nav styles on click
        $('#nav-toggle').click(function() {
            $('.menu-mobile').toggleClass('active');
        });

        // $('#carouselExampleCaptions').carousel({
        //     pause: true,
        //     interval: false
        // });
        // $('#carouselExampleCaptions').on('slid.bs.carousel', checkitem);
    }); // end DOM ready
    // caroudel
    var owl = $('#award-carousel');
    owl.owlCarousel({
        items:5,
        loop:true,
        margin:20,
        dots: false,
        autoplay:false,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsiveClass:true,
        responsive:{
            0: {
                items:3
            },

            600:{
                items:4
            },
            1000: {
                items:7,
                dots: true,
            }

        }

    });
    $('.play').on('click',function(){
        owl.trigger('play.owl.autoplay',[3000])
    })
    $('.stop').on('click',function(){
        owl.trigger('stop.owl.autoplay')
    }); //end carousel

    // menu scroll
    var c, currentScrollTop = 0,
        navbar = $('.header');
    $(window).scroll(function () {
        var a = $(window).scrollTop();
        var b = navbar.height();

        currentScrollTop = a;
        if(a === 0 ) {
            navbar.removeClass("change-background");
        }

        if (c < currentScrollTop && a > b + b) {
            navbar.addClass("scrollUp");
            navbar.addClass("change-background");
        } else if (c > currentScrollTop && !(a <= b)) {
            navbar.removeClass("scrollUp");
        }
        c = currentScrollTop;
    });




    $('#cemetery').owlCarousel({
        items:6,
        loop:true,
        margin:20,
        dots: false,
        navigation: false,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:4
            },
            600:{
                items:4
            },
            1000:{
                items:6
            }
        }
    });

    $('#slider-index').owlCarousel({
        items:1,
        loop:true,
        margin:20,
        navigation: true,
        autoplay:false,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                autoplay:false,
                dots: false,
            },
            1025: {
                dots: true
            }
        }
    });
    //add class active in menu
    var pathName = window.location.pathname;
    if(pathName === null){
        var pathName = location.pathname + "index.php";
        console.log(pathName);
    }

    var url = pathName,
        urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
    // now grab every link from the navigation
    $('.nav-list li a').each(function(){
        // and test its normalized href against the url pathname regexp
        if(urlRegExp.test(this.href.replace(/\/$/,''))){
                if (url !== "/") {
                    $(this).addClass('active');
                }

        }
    });
})(jQuery); // end jQuery
// function  abc() {
//     $('html, body').animate({
//         // scrollTop: $("#contact").offset().top
//     }, 0);
// }

$(document).ready(function(){
    $(".offer_card1").hover(function(){
        $(".hover1").css("display", "none");
        $(".hover_white1").css("display", "block");
    }, function(){
        $(".hover1").css("display", "block");
        $(".hover_white1").css("display", "none");
    });

    $(".offer_card2").hover(function(){
        $(".hover2").css("display", "none");
        $(".hover_white2").css("display", "block");
    }, function(){
        $(".hover2").css("display", "block");
        $(".hover_white2").css("display", "none");
    });

    $(".offer_card3").hover(function(){
        $(".hover3").css("display", "none");
        $(".hover_white3").css("display", "block");
    }, function(){
        $(".hover3").css("display", "block");
        $(".hover_white3").css("display", "none");
    });

    $(".offer_card4").hover(function(){
        $(".hover4").css("display", "none");
        $(".hover_white4").css("display", "block");
    }, function(){
        $(".hover4").css("display", "block");
        $(".hover_white4").css("display", "none");
    });
    $(".offer_card5").hover(function(){
        $(".hover5").css("display", "none");
        $(".hover_white5").css("display", "block");
    }, function(){
        $(".hover5").css("display", "block");
        $(".hover_white5").css("display", "none");
    });

    $(".offer_card6").hover(function(){
        $(".hover6").css("display", "none");
        $(".hover_white6").css("display", "block");
    }, function(){
        $(".hover6").css("display", "block");
        $(".hover_white6").css("display", "none");
    });
});
$(document).ready(function(){
    $('#formContact').on('submit',function(e) {  //Don't foget to change the id form
        var username = $("#username").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var findus = $("#findus").val();
        var message = $("#message").val();
        if (username == '' || email == '' || phone == '') {
            // alert("Please Fill Required Fields");
        } else {
            $.ajax({
                url: 'main.php', //===PHP file name====
                data: $(this).serialize(),
                type: 'POST',
                success: function (data) {
                    console.log(data);
                    //Success Message == 'Title', 'Message body', Last one leave as it is
                    swal("Success!", "You have successfully registered. We will contact you soon.", "success");
                    $("#formContact")[0].reset();
                },
                error: function (data) {
                    //Error Message == 'Title', 'Message body', Last one leave as it is
                    swal("Oops...", "Something went wrong :(", "error");
                }
            });
            e.preventDefault(); //This is to Avoid Page Refresh and Fire the Event "Click"
        }
});
});


$.fn.jQuerySimpleCounter = function( options ) {
    var settings = $.extend({
        start:  0,
        end:    100,
        easing: 'swing',
        duration: 400,
        complete: ''
    }, options );

    var thisElement = $(this);

    $({count: settings.start}).animate({count: settings.end}, {
        duration: settings.duration,
        easing: settings.easing,
        step: function() {
            var mathCount = Math.ceil(this.count);
            thisElement.text(mathCount);
        },
        complete: settings.complete
    });
};


$('#number1').jQuerySimpleCounter({end: 3,duration: 3000});
$('#number2').jQuerySimpleCounter({end: 20,duration: 3000});
$('#number3').jQuerySimpleCounter({end: 26,duration: 3000});
$('#number4').jQuerySimpleCounter({end: 50,duration: 2500});
