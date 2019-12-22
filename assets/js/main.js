/**
 * Asteriski WordPress theme main JS
 */

(function() {
    'use strict';

    jQuery(document).ready(function(jQuery) {

        /* Declaration of variables */

        // Common constants
        const COMMON = {
            win: window,
            doc: document,
            body: jQuery('body')
        };

        // Viewport sizes
        const VIEWPORT = {
            w: COMMON.win.innerWidth,
            h: COMMON.win.innerHeight
        };

        // ROOT
        let root = COMMON.doc.querySelector(':root');

        // Page width
        let page_width = VIEWPORT.w;

        // Hero header
        let hero_header = jQuery('.hero-header');

        // Main wrapper
        let wrapper = jQuery('#main-wrapper');

        // Footer
        let footer = jQuery('footer');

        // Page loader
        let loader = jQuery('.loader');

        // Mobile breakpoint
        let mobile_point = 1120;

        // Start for mobile version template
        let mobile_start = 1119;

        // Logo light
        let logo_light = jQuery('.logo-light');

        // Logo dark
        let logo_dark = jQuery('.logo-dark');

        // Navbar type
        let navbar_type = 'navbar-fill';

        // Logo position
        let logo_position = 'logo-left';

        // Progress bar
        let progress_bar = '.progress-bar-skill';

        // Progress bar test variable
        let progress_check = true;

        // Wrapper for 3d-hover elements
        let hover3d = jQuery('.hover3d-wrapper');

        // Viewport sizes reinit
        jQuery(COMMON.win).resize(function() {
            VIEWPORT.w = COMMON.win.innerWidth;
            VIEWPORT.h = COMMON.win.innerHeight;
            if ((page_width >= mobile_point && VIEWPORT.w <= mobile_start) || (page_width <= mobile_start && VIEWPORT.w >= mobile_point)) {
                location.reload();
            }
        });

        /* Navbar general */
        class NAV {
            /* Constructor */
            constructor() {
                this.root = COMMON.doc.querySelector(':root');
                this.navbar = jQuery('.navbar');
                this.navbar_toggle = this.navbar.find('.hamburger');
                this.menu = this.navbar.find('.navbar-menu');
                this.menu_list = this.menu.find('.navbar-menu-list');
                this.navbar_search = jQuery('.navbar-search');
                this.navbar_search_form = jQuery('.search-form');
                this.navbar_search_button = jQuery('.search-input');
                this.social_side = jQuery('.navbar-additional');
            }

            /* Mobile test */
            _mobile_check() {
                if (VIEWPORT.w < mobile_point) {
                    this.navbar.addClass('mobile-menu');
                    this.navbar.removeClass('desktop-menu');
                } else if (VIEWPORT.w >= mobile_point) {
                    this.navbar.removeClass('mobile-menu');
                    this.navbar.addClass('desktop-menu');
                }
            }

            /* Mobile menu */
            _mobile_menu() {
                let primary_items = this.menu.find('.menu-primary-item');
                let mobile_items = this.menu.find('.mobile-menu-toggle');
                let item_count = primary_items.length;
                this._mobile_check();
                jQuery(COMMON.win).resize(() => {
                    this._mobile_check();
                });
                this.navbar_toggle.on('click', () => {
                    this.menu.slideToggle(250);
                    let sub_menus = this.menu.find('.sub-menu');
                    let megamenu = this.menu.find('.megamenu');
                    this.navbar_toggle.toggleClass('is-active');
                    if (!this.navbar_toggle.hasClass('is-active')) {
                        sub_menus.slideUp('fast');
                        megamenu.slideUp('fast');
                        sub_menus.removeClass('active-sub-menu-toggle');
                        megamenu.removeClass('active-sub-menu-toggle');
                        mobile_items.removeClass('active-mobile-menu-toggle');
                    }
                });
            }

            /* Sub menus */
            _sub_menus() {
                let items_has_children = this.menu.find('.menu-item-has-children');
                let mobile_items = this.menu.find('.mobile-menu-toggle');
                if (jQuery(COMMON.win).innerWidth() > 1120) {
                    items_has_children.hover(function() {
                        let sub_menus = jQuery(this).find('.sub-menu');
                        jQuery(sub_menus[0]).addClass('active-sub-menu');
                    }, function() {
                        let sub_menus = jQuery(this).find('.sub-menu');
                        jQuery(sub_menus[0]).removeClass('active-sub-menu');
                    });
                } else {
                    mobile_items.on('click', function() {
                        let sub_menus = jQuery(this).parent().find('.sub-menu');
                        let mega_menus = jQuery(this).parent().find('.megamenu');
                        let inside_items = jQuery(this).parent().parent().find('.mobile-menu-toggle');
                        if (!jQuery(this).hasClass('active-mobile-menu-toggle')) {
                            let active_sub_menus = jQuery(this).parent().parent().find('.active-sub-menu-toggle');
                            jQuery(inside_items).removeClass('active-mobile-menu-toggle');
                            jQuery(active_sub_menus).slideUp('fast');
                            jQuery(this).addClass('active-mobile-menu-toggle');
                            jQuery(sub_menus[0]).slideDown('fast');
                            jQuery(sub_menus[0]).addClass('active-sub-menu-toggle');
                            jQuery(mega_menus[0]).slideDown('fast');
                            jQuery(mega_menus[0]).addClass('active-sub-menu-toggle');
                        } else {
                            jQuery(this).parent().find('.sub-menu').slideUp('fast');
                            jQuery(this).parent().find('.megamenu').slideUp('fast');
                            jQuery(this).removeClass('active-mobile-menu-toggle');
                            jQuery(sub_menus).removeClass('active-sub-menu-toggle');
                            jQuery(mega_menus).removeClass('active-sub-menu-toggle');
                        }
                    });
                }
            }

            /* Navbar search */
            _navbar_search() {
                let input = this.navbar_search_form.find('input');
                let icon_on = this.navbar_search_button.find('.search-icon');
                let icon_off = this.navbar_search_button.find('.search-times');
                let social_width;
                let width;
                if (this.social_side.length) {
                    social_width = this.social_side.outerWidth(true);
                }

                this.navbar_search_button.on('click', () => {

                    input.toggleClass('active-form');
                    icon_on.toggleClass('icon-off');
                    icon_off.toggleClass('times-active');
                    this.navbar.toggleClass('navbar-additional-disable');
                    width = social_width || 180;
                    if (input.hasClass('active-form')) {
                        if (logo_position === 'logo-left') {
                            input.css({
                                'width': width + 'px',
                                'margin-right': '-' + width + 'px'
                            });
                            this.navbar_search.css({
                                'transform': 'translateX(-' + width + 'px)'
                            });
                            if (!this.social_side.length) {
                                this.menu_list.css({
                                    'margin-right': '200px'
                                });
                            }
                        } else if (logo_position === 'logo-right') {
                            input.css({
                                'width': width + 'px',
                                'margin-left': '-' + (width + 50) + 'px'
                            });
                            this.navbar_search.css({
                                'transform': 'translateX(' + width + 'px)'
                            });
                            if (!this.social_side.length) {
                                this.menu_list.css({
                                    'margin-left': '200px'
                                });
                            }
                        }
                    } else if (!input.hasClass('active-form')) {
                        if (logo_position === 'logo-left') {
                            input.css({
                                'width': '0',
                                'margin-right': '0'
                            });
                            this.navbar_search.css({
                                'transform': 'translateX(0px)'
                            });
                            if (!this.social_side.length) {
                                this.menu_list.css({
                                    'margin-right': '20px'
                                });
                            }
                        } else if (logo_position === 'logo-right') {
                            input.css({
                                'width': '0',
                                'margin-left': '0'
                            });
                            this.navbar_search.css({
                                'transform': 'translateX(0px)'
                            });
                            if (!this.social_side.length) {
                                this.menu_list.css({
                                    'margin-left': '20px'
                                });
                            }
                        }
                    }
                });
            }

            /* Navbar type */
            _navbar_type() {
                if (VIEWPORT.w >= mobile_point) {
                    if (jQuery(COMMON.win).scrollTop() >= 100) {
                        this.navbar.addClass(navbar_type);
                        logo_light.css({
                            'display': 'none'
                        });
                        logo_dark.css({
                            'display': 'block'
                        });
                    } else if (jQuery(COMMON.win).scrollTop() < 100) {
                        this.navbar.removeClass(navbar_type);
                        logo_light.css({
                            'display': 'block'
                        });
                        logo_dark.css({
                            'display': 'none'
                        });
                    }
                }
            }

            /* Navbar init */
            INIT() {
                this.navbar.addClass(logo_position);
                this._navbar_type();
                jQuery(COMMON.win).scroll(() => {
                    this._navbar_type();
                });
                this._mobile_check();
                this._mobile_menu();
                this._sub_menus();
                this._navbar_search();
            }
        }

        /* Declaration of constants for main classes */
        const NAVIGATION = new NAV();

        /* Init main classes */
        NAVIGATION.INIT();
    });

})();

/* Init wow.js */

//new WOW().init();
