(function ($) {
	
	"use strict";

	// Page loading animation
	$(window).on('load', function() {

        $('#js-preloader').addClass('loaded');

    });


	// $(window).scroll(function() {
	//   var scroll = $(window).scrollTop();
	//   var box = $('.banner-content').height();
	//   var header = $('header').height();

	//   if (scroll >= box - header) {
	//     $("header").addClass("background-header");
	//   } else {
	//     $("header").removeClass("background-header");
	//   }
	// })
	$(window).on('scroll', function () {
		var scroll = $(window).scrollTop();
		var box = $('.banner-content').height();
		var header = $('header').height();
	
		if (scroll >= box - header) {
			$("header").addClass("background-header");
		} else {
			$("header").removeClass("background-header");
		}
	});

	// $('.owl-banner').owlCarousel({
	//   center: true,
    //   items:1,
    //   loop:true,
    //   nav: true,
	//   dots:true,
	//   navText: ['<i class="fa fa-arrow-left" aria-hidden="true"></i>','<span class="vertical-line"></span> <i class="fa fa-arrow-right" aria-hidden="true"></i>',],
    //   margin:30,
    //   responsive:{
    //     992:{
    //         items:1
    //     },
	// 	1200:{
	// 		items:1
	// 	}
    //   }
	// });
	$('#our-collaborations-owl-carousel').owlCarousel({
		loop: true, // Ensure smooth looping
		margin: 20, // Reduce the margin between items
		nav: true, // Enable navigation
		center: false, // Disable center mode
		items: 1,
		dots: true,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			1000: {
				items: 4 // Display 4 items on larger screens
			}
		},
		navText: [
			'<i class="fa fa-circle-chevron-left" aria-hidden="true"></i>',
			'<i class="fa fa-circle-chevron-right" aria-hidden="true"></i>'
		]
	});
	
	$('#our-team-owl-carousel').owlCarousel({
		loop: true,
		margin: 30,
		nav: true,
		center: false,
		 items:1,
		dots:true,
		autoplay: true,
		// navText: ["←", "→"], // Custom arrow text
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			768: {
				items: 2
			},
			1000: {
				items: 4
			}
		},
		navText: [
			'<i class="fa fa-circle-chevron-left" aria-hidden="true"></i>',
			'<i class="fa fa-circle-chevron-right" aria-hidden="true"></i>'
		]
	});
	$('#event-owl-carousel').owlCarousel({
		loop: true,
		margin: 30,
		nav: true,
		center: false,
		 items:1,
		dots:true,
		autoplay: true,
		// navText: ["←", "→"], // Custom arrow text
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			1000: {
				items: 3
			}
		},
		navText: [
			'<i class="fa fa-circle-chevron-left" aria-hidden="true"></i>',
			'<i class="fa fa-circle-chevron-right" aria-hidden="true"></i>'
		]
	});
	$('#program-testimonial-owl-carousel').owlCarousel({
		loop: true,
		margin: 20,
		nav: true,
		center: false,
		 items:1,
		dots:true,
		autoplay: true,
		// navText: ["←", "→"], // Custom arrow text
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			},
			1000: {
				items: 1.5
			}
		},
		navText: [
			'<i class="fa fa-circle-chevron-left" aria-hidden="true"></i>',
			'<i class="fa fa-circle-chevron-right" aria-hidden="true"></i>'
		]
	});
	$('#contact-owl-carousel').owlCarousel({
		loop: true,
        margin: 30,
        nav: true,
        center: false,
         items:1,
        dots:true,
        autoplay: true,
        // navText: ["←", "→"], // Custom arrow text
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            768: {
                items: 4
            },
            1000: {
                items: 6
            }
        },
		navText: [
			'<i class="fa fa-circle-chevron-left" aria-hidden="true"></i>',
			'<i class="fa fa-circle-chevron-right" aria-hidden="true"></i>'
		]
    });

	var width = $(window).width();
		$(window).resize(function() {
		if (width > 767 && $(window).width() < 767) {
			location.reload();
		}
		else if (width < 767 && $(window).width() > 767) {
			location.reload();
		}
	})


	// Ensure the DOM is fully loaded before running the script
// $(document).ready(function() {
// 	// Toggle menu for medium screens
// 	if ($(window).width() >= 768 && $(window).width() <= 1023) {
// 	  if ($('.menu-trigger').length) {
// 		$(".menu-trigger").on('click', function() {
// 		  $(this).toggleClass('active');
// 		  $('.header-area .nav').slideToggle(200); // Toggles the visibility of the menu
// 		});
// 	  }
  
// 	  // Smooth scroll with menu toggle on selection
// 	  $('.scroll-to-section a[href*=\\#]:not([href=\\#])').on('click', function() {
// 		if (
// 		  location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') &&
// 		  location.hostname === this.hostname
// 		) {
// 		  var target = $(this.hash);
// 		  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
// 		  if (target.length) {
// 			var width = $(window).width();
// 			if (width < 991) {
// 			  $('.menu-trigger').removeClass('active'); // Close the menu after clicking
// 			  $('.header-area .nav').slideUp(200);
// 			}
// 			$('html,body').animate({
// 			  scrollTop: target.offset().top - 80, // Adjust scroll position
// 			}, 700);
// 			return false;
// 		  }
// 		}
// 	  });
// 	}
//   });

	// Menu Dropdown Toggle
if ($('.menu-trigger').length) {
	$(".menu-trigger").on('click', function() {
	  $(this).toggleClass('active');
	  $('.header-area .nav').slideToggle(200);
	});
  }
  
  // Menu elevator animation
  $('.scroll-to-section a[href*=\\#]:not([href=\\#])').on('click', function() {
	if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
	  var target = $(this.hash);
	  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	  if (target.length) {
		var width = $(window).width();
		if (width < 991) {
		  $('.menu-trigger').removeClass('active');
		  $('.header-area .nav').slideUp(200);
		}
		$('html,body').animate({
		  scrollTop: (target.offset().top) - 80
		}, 700);
		return false;
	  }
	}
  });
  
  // Active menu item on click
  $('.nav li a').on('click', function() {
	$('.nav li a').removeClass('active'); // Remove active class from all menu items
	$(this).addClass('active'); // Add active class to the clicked menu item
  });
  
  // Underline effect on hover
  $('.nav li a').hover(function() {
	$(this).toggleClass('hovered'); // Add hover class to apply underline effect
  });
  
  document.addEventListener('DOMContentLoaded', function () {
	const mainMenuLinks = document.querySelectorAll('.main-menu-link');
	const subMenuLinks = document.querySelectorAll('.menu-link');
	const currentUrl = window.location.href;
  
	// Highlight active menu item for main and sub-header menus
	[...mainMenuLinks, ...subMenuLinks].forEach(link => {
	  if (link.href === currentUrl) {
		link.classList.add('active');
	  }
	});
  
  });
  



	// Page loading animation
	$(window).on('load', function() {
		if($('.cover').length){
			$('.cover').parallax({
				imageSrc: $('.cover').data('image'),
				zIndex: '1'
			});
		}

		$("#preloader").animate({
			'opacity': '0'
		}, 600, function(){
			setTimeout(function(){
				$("#preloader").css("visibility", "hidden").fadeOut();
			}, 300);
		});
	});
    


})(window.jQuery);