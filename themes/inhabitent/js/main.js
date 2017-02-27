
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