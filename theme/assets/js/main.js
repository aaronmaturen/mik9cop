/**
 * K9 Hero Guardians Theme Scripts
 */

(function($) {
    'use strict';

    // Mobile menu toggle
    $('.menu-toggle').on('click', function() {
        $(this).toggleClass('active');
        $('#primary-menu').toggleClass('active');

        // Toggle aria-expanded for accessibility
        var expanded = $(this).attr('aria-expanded') === 'true';
        $(this).attr('aria-expanded', !expanded);
    });

    // Handle window resize
    $(window).on('resize', function() {
        if ($(window).width() > 768) {
            $('#primary-menu').removeClass('active');
            $('#primary-menu').removeAttr('style');
            $('.menu-toggle').attr('aria-expanded', 'false');
        }
    });

    // Smooth scroll for anchor links
    $('a[href*="#"]').on('click', function(e) {
        if (this.hash !== '') {
            var hash = this.hash;
            var target = $(hash);

            if (target.length) {
                e.preventDefault();

                $('html, body').animate({
                    scrollTop: target.offset().top - 100
                }, 800);
            }
        }
    });

    // Add 'scrolled' class to header on scroll
    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 50) {
            $('.site-header').addClass('scrolled');
        } else {
            $('.site-header').removeClass('scrolled');
        }
    });

    // Fade in elements on scroll
    if ($('.service-box, .full-width-section').length) {
        $(window).on('scroll', function() {
            $('.service-box, .full-width-section').each(function() {
                var elementTop = $(this).offset().top;
                var viewportBottom = $(window).scrollTop() + $(window).height();

                if (elementTop < viewportBottom - 100) {
                    $(this).addClass('fade-in');
                }
            });
        });

        // Trigger on page load
        $(window).trigger('scroll');
    }

})(jQuery);
