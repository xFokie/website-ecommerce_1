$( document ).ready(function() {
    var amountScrolled = 300;

    $(window).scroll(function() {
        if ( $(window).scrollTop() < amountScrolled ) {
            $('a.back-to-top').fadeOut('slow');
        } else {
            $('a.back-to-top').fadeIn('slow');
        }
    });

    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 600);
                    return false;
                }
            }
        });
    });
});
