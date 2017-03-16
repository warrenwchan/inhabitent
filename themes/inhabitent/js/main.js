// scroll navbar invert toggle
(function($){
   $(window).scroll(function() {
       event.preventDefault();
            var scroll = $(window).scrollTop();

            if (scroll >= $(window).height()) {
            $('.site-header').removeClass('reverse-header');
            } else {
            $('.site-header').addClass('reverse-header');}
        })
})(jQuery);

// search bar show/hide toggle
(function($) {
   $('.search-submit').on('click', function(event) {
       event.preventDefault();
       $('.search-field').animate( { width: 'toggle' }, 500 );
   });
})(jQuery);