document.createElement('header');
document.createElement('nav');
document.createElement('aside');
document.createElement('section');
document.createElement('footer');


  /* show/hide overlay & toggle style of button */
$('.togglelight').click(function(){
  $(this).toggleClass('lightsoff');
  $('.overlayz').fadeToggle(400);
});



jQuery(window).scroll(function () {
    if (jQuery(window).scrollTop() == 0) {
        jQuery('#scrollToTop').fadeOut("fast");
    } else {
        if (jQuery('#scrollToTop').length == 0) {
            jQuery('body').append('<div id="scrollToTop">' +
                '<a href="#">Retour en haut</a>' +
                '</div>');
        }
        jQuery('#scrollToTop a').fadeIn("fast");
    }
});

$(document).ready(function () {

 $('.popup-youtube').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,

        fixedContentPos: false
    });

    

	// Create a lightbox

var $lightbox = $("<div class='lightbox'></div>");
var $img = $('<iframe width="560" height="315"  frameborder="0" allowfullscreen>');
var $caption = $("<p class='caption'></p>");


// Add image and caption to lightbox

$lightbox
	.append($img)
	.append($caption);

// Add lighbox to document

$('body').append($lightbox);


$('.gallery li').click(function (e) {
	e.preventDefault();

	// Get image link and description
	var src = $(this).children('img').attr("data-image");
	var cap = $(this).children('img').attr("alt");

	// Add data to lighbox

	$img.attr('src',src);
	$caption.text(cap);

	// $lightbox.append('<img src="' + src + '"></img><p class="caption">' + caption + '</p>');

	// Show lightbox

	$lightbox.show();

	$lightbox.click(function () {
		$lightbox.hide();
	});
});

  
  
  
  

    $("#owl-slider").owlCarousel({

        navigation: true,
        pagination: true,
        responsive: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        navigationText: ["&lt;", "&gt;"],
        transitionStyle: false, // Effets disponibles : "fade", "backSlider", "goDown", "fadeUp"
        autoPlay: 3000,
        stopOnHover: true
    });

    jQuery('#scrollToTop a').live('click', function (event) {
        event.preventDefault();
        jQuery('html,body').animate({
            scrollTop: 0
        }, 'slow');
        return false;
    });
});