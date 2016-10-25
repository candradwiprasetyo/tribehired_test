// JavaScript Document

$(document).ready(function() {

  // -------------- Backstrech (BG slideshow)-------------- 

  if ( $("body").hasClass("slideshowbody") ) {
    $.backstretch([
      "assets/images/banner1.jpg",
      "assets/images/banner2.jpg",
      "assets/images/banner3.jpg"
      ], {
        fade: 750,
        duration: 4000
    });
  };

  // -------------- Parallax -------------- 
  
  $('.banner-parallax').parallax("50%", 0.3);
  $('.testimonial').parallax("50%", 0.3);
  $('.counter').parallax("50%", 0.3);
  $('.offer').parallax("50%", 0.3);

  // -------------- On Scroll Navbar Effect -------------- 

  var window_width = $(window).width();

  $(window).scroll(function(){  
    "use strict"; 
    var scroll = $(window).scrollTop();
    if( scroll > 60 ){   
      $(".navbar").addClass("scroll-fixed-navbar");
      
    } else {
      $(".navbar").removeClass("scroll-fixed-navbar");

    }
  });

  // -------------- Scroll to content animation -------------- 

  $(".navbar-nav li a[href^='#']").on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: $(this.hash).offset().top-60
    }, 1000);
  });

  // -------------- Jquery WOW (reveal content when scroll) -------------- 

  wow = new WOW(
    {
      animateClass: 'animated',
      offset:       100,
      mobile:       false
    }
  );
  wow.init();

  // -------------- Jquery CountTo (Project Counter) -------------- 

  $('.timer').each(count);
  function count(options) {
    var $this = $(this);
    options = $.extend({}, options || {}, $this.data('countToOptions') || {});
    $this.countTo(options);
  }

  // -------------- Owl Carousel -------------- 

  var owl = $("#clients");
 
  owl.owlCarousel({
    items : 5, //10 items above 1000px browser width
    itemsDesktop : [1000,5], //5 items between 1000px and 901px
    itemsDesktopSmall : [900,3], // betweem 900px and 601px
    itemsTablet: [600,2], //2 items between 600 and 0
    itemsMobile : [400,1], // 1 items between 400 and 0
    pagination: false,
    autoPlay : 3000
  });

  // -------------- Fancybox -------------- 

  $('.fancybox').fancybox({
    helpers: {
      overlay: {
        locked: false
      }
    }
  });

});



$(window).load(function(){

  // -------------- Jquery Masonry (Project Counter) -------------- 

  var $container = $('#masonry-container');

  $container.masonry({
    columnWidth: '.masonry',
    itemSelector: '.masonry'
  });

  // -------------- Unknown height vertical aligning-------------- 

  // $( ".work-image" ).ready(function(){
  //   var valigncontainer = $(".valign-container").height();
  //   var valigncontent = $(".valign-content").height();
  //   var margintop = (valigncontainer-valigncontent)/2+'px';

  //   $(".valign-content").css("margin-top", margintop);
  // });

  // -------------- Jquery Isotope Setting -------------- 

  var $container = $('.portfoliocontent');
  $container.isotope({
    filter: '*',
    animationOptions: {
      duration: 750,
      easing: 'linear',
      queue: false
    }
  });

  $('.portfoliofilter a').click(function(){
    $('.portfoliofilter .current').removeClass('current');
    $(this).addClass('current');

    var selector = $(this).attr('data-filter');
    $container.isotope({
      filter: selector,
      animationOptions: {
        duration: 750,
        easing: 'linear',
        queue: false
      }
     });
     return false;
  });

});