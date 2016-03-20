

jQuery(function($){

    console.log("hello");

    (function(){

        /* Resize banner to fit window*/
        
        $(window).resize(function(){
            resizeBanner();
        });

        function resizeBanner() {
            $('.main-banner-wrapper').css('height', $(window).height());
        }

        resizeBanner();


    })();

    (function(){

        /* animated entrance functionality */
        
        var waypoints = $('.introduction').waypoint({
            handler: function(direction) {
                $(this.element).addClass('animated bounceInUp visible');
            },
            offset: '85%'
        });

        waypoints = $('.services-list .service-item').waypoint({
            handler: function(direction) {
                $(this.element).addClass('animated bounceInLeft visible');
            },
            offset: '75%'
        });

        waypoints = $('.testimonials-slider').waypoint({
            handler: function(direction) {
                $(this.element).addClass('animated rotateInUpLeft visible');
            },
            offset: '85%'
        });

        waypoints = $('.project').waypoint({
            handler: function(direction) {
                $(this.element).addClass('animated bounceInLeft visible');
            },
            offset: '85%'
        });

    })();

    (function() {

        /* Main nav bar show and hide */

        if ($('.introduction-wrapper').length != 0) {

            $(window).scroll(function () {

                var nav = $('.site-navigation-wrapper');

                if ($('.introduction-wrapper').offset().top - $(window).scrollTop() <= 0) {
                    nav.addClass('animated fadeInDown fixed');
                } else {
                    nav.removeClass('animated fadeInDown fixed');
                }

            });
        }
    })();

    (function() {

        /* Inner page nav toggle */

        var innerPageNav = $('.inner-page-nav');
        innerPageNav.css('display', 'none');

        $('#toggleNav').on('click', function(e){
            e.preventDefault();
            $(this).css('color', '#666');
            innerPageNav.stop().slideToggle(200);
        });

    })();

    (function(){

        /* Modal content functionality */

        var project = $('.project');
        var modal = $('#projectModal');

        project.find('a').on('click', function(){

            var url = $(this).data('video');
            var heading = $(this).data('heading');

            if (url.length > 0) {
                modal.find('iframe').attr('src', url).css('display', 'block');
                modal.find('.modal-title').text(heading);
            } else {
                modal.find('.modal-body > div').append('<h2>Video coming soon...</h2>')
                    .find('iframe').css('display', 'none');
                modal.find('.modal-title').text('Not available');
            }

            
        });

        modal.on('hide.bs.modal', function (e) {
            $(this).find('.modal-body > div').find('h2').remove();
            $(this).find('iframe').attr('src', '');
        });


    })();

    (function(){

        /* service items float left / right */

        var oddRow = $('.services-item-list').find('.row:odd');

        oddRow.find('.col-md-6:first').addClass('pull-right');
        oddRow.find('.col-md-6:last').addClass('pull-left');

    })();

});
