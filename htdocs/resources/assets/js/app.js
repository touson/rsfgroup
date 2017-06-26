 $(function($) {
	/**
	 * equalHeights
	 * ------------
	 * Sets all items in the group to be of equal heights
	 */
	 $.fn.equalHeights = function() {
	 	var maxHeight = 0,
	 	$this = $(this);
	 	$this.css('height', 'initial');
	 	$this.each( function() {
	 		var height = $(this).innerHeight();
	 		if ( height > maxHeight ) { maxHeight = height; }
	 	});
	 	return $this.css('height', maxHeight);
	 };
	/**
	 * Markup driven, targetted equalHeights
	 * -------------------------------------
	 * Alls an individual DOM element to be resized to match another
	 * by adding the selector class in a data-equal attribute
	 */
	 $('[data-equal]').each(function(){
	 	var $this = $(this),
	 	target = $this.data('equal');
	 	$this.find(target).equalHeights();
	 });

	/**
	 * scrollToAnchor
	 * --------------
	 * Allow easy page scrolling to specific point
	 * @usage 	$('.btn-reviews').scrollToAnchor({ anchor: '#reviews-anchor' });
	 */
	 $.fn.scrollToAnchor = function() {
	 	var options = $.extend({
	 		anchor : '.scroll',
	 		setupCallback : null
	 	}, arguments[0] || {});

	 	return this.each(function() {
	 		$(this).click(function(e) {
	 			$('html,body').animate({scrollTop: $(options.anchor).offset().top}, 500);
	 			$.isFunction( options.setupCallback ) && options.setupCallback.call( this );
	 			e.preventDefault();
	 		});
	 	});
	 }

});

$(window).on('resize', function() {
	// Set the homepage panel H2 tags to be of equal heights when window is resized.
	$('.hp-panels h2').equalHeights();
	// Reposition page-header elements
	pageHeaderPadding();
});

$(document).ready(function(){
	// Initialize homepage carousel
	hpCarousel = $('#hp-slider').bxSlider({
		mode: 'fade',
		speed: 500,
		pager: true,
		auto: true,
		pause: 4000,
		pagerCustom: '#slide-selector',
		controls: false,
		autoHover: true
	});
	// Activate mobile nav trigger
	$('#ellipse').click(function(){
		$('.main-nav').toggleClass('active');
	});
	// Animate main nav
	$('.main-nav .parent')
	.mouseenter(function(e){
		var $elem = $(this);
		var active = $elem.hasClass('active');
		$('.main-nav .parent').removeClass('active');
		if(!active) {
			$elem.addClass('active');
		}
	})
	.mouseleave(function(){
		$('.main-nav .parent').removeClass('active');
	});

	// Trigger the layout functions
	repositionTestimonials();
	pageHeaderPadding();
});

// Global vars used by the pageHeaderPadding function.
// We set them here so they only get set once on page load.
var $es = $('#es-water-approved-block');
var $headerTitle = $('.page-header h1');

/**
 * Page Header Padding
 * -------------------
 * Repositions the essex approved block and the page title in the page-header
 * div when the viewport is over 1200px
 */
var pageHeaderPadding = function(){
	var viewPortWidth = $('body').innerWidth();
	if(viewPortWidth > 1200) {
		var pos = (viewPortWidth - 1200) / 2 + 20;
		$es.css('left', pos);
		$headerTitle.css('padding-left', pos);
	} else if(viewPortWidth < 768) {
		$headerTitle.css('padding-left', 0);
	} else {
		$es.css('left', 30);
		$headerTitle.css('padding-left', 130);
	}
}

/**
 * Reposition Testimonials
 * -----------------------
 * Sets the css value for each testimonial block by checking the top and height
 * of the one directly above it.  This function also calculates the total height
 * of the columns and sets the height value of the container as all the children
 * are absolutely positioned.
 */
 function repositionTestimonials() {
 	var $testimonials = $('.testimonial');
 	if($(window).width() > 600) {
		// Keep track of both column heights to determine the container size
		var heights = [0,0];
		$testimonials.each(function(i, testimonial){
			if(i > 1) {
				// Get the height and top position of the testimonial
				// block above the current one
				var $oneAbove = $($testimonials[i - 2]);
				var height = $oneAbove.outerHeight();
				var topAbove = parseInt($oneAbove.css('top'));
				var top = topAbove + height + 20;
				// Set the top value for the current testimonial based on
				// the position and size of the one above
				$(testimonial).css('top', top + 'px');
			} else {
				var height = $(testimonial).outerHeight();
			}
			// Calculate the height of each column
			heights[i % 2] += height + 20;
		});
		// Set the testimonials container height based
		// on the highest of the 2 columns
		var highest = Math.max.apply(Math, heights);
		highest += 20;
		$('.testimonials').css('height', highest + 'px');
	} else {
		$testimonials.css('top', 'initial');
		$('.testimonials').css('height', 'auto');
	}
}
