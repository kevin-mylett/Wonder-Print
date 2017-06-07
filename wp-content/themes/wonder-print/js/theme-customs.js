//***WONDER PRINT THEME JS***//

jQuery(document).ready(function($) {

	$('.twitter-block').delegate('#twitter-widget-0','DOMSubtreeModified propertychange', function() {

            hideTweetMedia();

        });
        var hideTweetMedia = function() {

            $('.twitter-block').find('.twitter-timeline').contents().find('.timeline-Tweet-media').css('display', 'none');

            //$('.twitter-block').css('height', '100%');

            $('.twitter-block').find('.twitter-timeline').contents().find('.Identity-screenName').css('color', '#236360');

            $('.twitter-block').find('.twitter-timeline').contents().find('.TweetAuthor-name').css('color', '#fff');

            $('.twitter-block').find('.twitter-timeline').contents().find('.timeline-Tweet-text').css({'color': '#236360', 'font-size':'1.1em'});

            $('.twitter-block').find('.twitter-timeline').contents().find('.timeline-Tweet-retweetCredit').css('color', '#236360');

            $('.twitter-block').find('.twitter-timeline').contents().find('.timeline-TweetList').bind('DOMSubtreeModified propertychange', function() {

                hideTweetMedia(this);

            });

        };
    });


//Cookie Notice
window.addEventListener("load", function(){
    window.cookieconsent.initialise({
      "palette": {
        "popup": {
          "background": "#333333",
          "text": "#ffffff"
        },
        "button": {
          "background": "transparent",
          "text": "#55C2BC",
          "border": "#55C2BC"
        }
      },
      "position": "bottom-left",
      "content": {
        "dismiss": "Great - I love cookies!"
      }
    })
});

/**** Plus & Minus Quantity buttons ***/

jQuery( function( $ ) {

  $( document ).on( 'click', '.plus, .minus', function() {

    // Get values
    var $qty    = $( this ).closest( '.quantity' ).find( '.qty' ),
      currentVal  = parseFloat( $qty.val() ),
      max     = parseFloat( $qty.attr( 'max' ) ),
      min     = parseFloat( $qty.attr( 'min' ) ),
      step    = $qty.attr( 'step' );

    // Format values
    if ( ! currentVal || currentVal === '' || currentVal === 'NaN' ) currentVal = 0;
    if ( max === '' || max === 'NaN' ) max = '';
    if ( min === '' || min === 'NaN' ) min = 0;
    if ( step === 'any' || step === '' || step === undefined || parseFloat( step ) === 'NaN' ) step = 1;

    // Change the value
    if ( $( this ).is( '.plus' ) ) {

      if ( max && ( max == currentVal || currentVal > max ) ) {
        $qty.val( max );
      } else {
        $qty.val( currentVal + parseFloat( step ) );
      }

    } else {

      if ( min && ( min == currentVal || currentVal < min ) ) {
        $qty.val( min );
      } else if ( currentVal > 0 ) {
        $qty.val( currentVal - parseFloat( step ) );
      }

    }

    // Trigger change event
    $qty.trigger( 'change' );

  });

});


//Toggle Add Review Button on Review Tab
jQuery(document).ready(function($){
   $("#review_form").hide();
   $("#show-review-form").click(function(event){
     $("#review_form").toggle();
   });
 });

//Toggle product customisation info underneath product image
jQuery(document).ready(function($){
   $("#customise-info").hide();
   $("#show-custom-info").click(function(event){
     $("#customise-info").toggle();
   });
 });

//***END OF WONDER PRINT THEME JS***//