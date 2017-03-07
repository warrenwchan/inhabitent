
/** scroll navbar toggle */
(function($){
   $(window).scroll(function() {
       event.preventDefault();
            var scroll = $(window).scrollTop();

            if (scroll >= 1098)
            $(".site-header").removeClass("reverse-header");
            else
            $(".site-header").addClass("reverse-header");
        })
})
(jQuery);

(function( $ ) {
   $('.search-submit').on('click', function(event) {
       event.preventDefault();
       $('.search-field').animate( { width: 'toggle' }, 500 );
   });

  $('.search-submit').on('blur', function() {
       $('.search-field').animate( { width: 'toggle' }, 500 );
   });
})( jQuery );