<?php

/*
=============================================================================
CUSTOM SETTINGS FOR THE THEME OPTIONS PANEL
=============================================================================

Add new settings to the theme options panel here.
Every array item is a new setting.

Available values for "type" setting: checkbox,select,text,textarea,color,image_upload
Available values for "label" setting: main,layout,menu,footer,lists,titles,customizations,social

$HC_CUSTOM_PANEL
name : Theme's name
version : Theme's version
colors : Theme's panel colors

Documentation: wordpress.framework-y.com/advanced-api-documentation/#custom-theme

 */
global $HC_CUSTOM_THEME_OPTIONS;
global $HC_CUSTOM_PANEL;

$HC_CUSTOM_FONT = "Libre+Baskerville:400,400i|Montserrat:300,400,500,600";
$HC_SITE_FONTS = 'body, .adv-img p, .caption-bottom p, .adv-circle .caption p, .advs-box p, p, .title-base p, .subheader-bootstrap .sub {
    font-family: [FONT-1] !important;
}
.title-base p, .font-2 {
    font-family: [FONT-2] !important;
}';

$HC_CUSTOM_PANEL = array(
	'name'    => 'Gourmet',
    'version' => '1.4.7',
    'colors'  => array("#23282d","#353535"),
    'demos' => array(array('id' => 'gourmet','name' => 'Main demo')),
    'demos_url' => 'http://themes.framework-y.com/demo-import/'
);

$HC_SITE_COLORS = '.advs-box-top-icon .icon.circle, .btn.btn-border, .btn-default i, .btn i, .btn-text i, .list-texts li b, .side-menu i, .accordion-list .list-group-item > a.active, .img-box.i-bottom i:before, .accordion-list .list-group-item:after, .pricing-table .pricing-price span, .btn-text, .dropdown-menu > li > a:before, .navbar-nav > li.dropdown > a:after, .nav-pills > li > a:hover, .fa-li, i.icon, .counter-inverse .icon-box-cell p, i.square, i.circle, .niche-box-testimonails > h5 span, .timeline small a.collapse-button:hover, li.panel-item .fa-li, .fullpage-menu li.active i, .fullpage-menu li.active span, .fullpage-menu li:hover i, .fullpage-menu li:hover span, .social-group i.circle, .icon-list .list-item i, .accordion-list .list-group-item > a:hover, .side-menu > li.active > a > i, .navbar-default .navbar-nav > .active > a {
    color: [MAIN-COLOR];
}

.shop-menu .cart-buttons a:hover, .mi-menu ul li > a:hover, .mi-menu ul li.active > a, .mi-menu ul li > a:hover i, .mi-menu ul li.active > a i, .pricing-table .pricing-price, .list-group-item.pricing-price:hover, .nav-tabs > li:hover > a, .nav-tabs > li:hover > a i, .nav-tabs > li.active > a, .nav-tabs > li.active > a i, .list-group-item:not(.active):hover > a:not(.btn), header .btn-search:hover, .nav.ms-minimal > li.active > a, .icon-background.boxed-inverse:not(.bg-color) .i-background, .icon-box-cell > i, .advs-box.boxed a.btn, .advs-box.boxed a i, .dropdown.btn-group .active > a, .bootgrid-header .dropdown-item:hover, .white .box-side-icon-small .icon-box i, .btn-text:hover, .advs-box-top-icon.boxed-inverse .icon, .advs-box-top-icon.boxed .btn, .footer-minimal .footer-title, .advs-box-top-icon.boxed .circle-button, .white .text-color, .text-color, .boxed .circle-button:hover i, .btn-text i, .boxed .circle-button, .pagination > .active > a, .pagination > li > a:hover, .datepicker-panel > ul > li:hover, .adv-img-button-content .caption i, .social-line .social-group i.circle:hover, .white .icon-box-cell > i.square, .white .icon-box-cell > i.circle, .white .pagination > li > a:hover, .white .pagination > .active > a, .white.advs-box-blog .tag-row span:after, .white.niche-box-post .tag-row span:after {
    color: [MAIN-COLOR] !important;
}

div .woocommerce a.button.alt,.btn-border:after, .nav-tabs > li > a:before, .advs-box-top-icon-img.boxed:not(.niche-box-post):after, .advs-box-blog.boxed:after, .timeline > li > .timeline-badge, .social-group i.circle, .social-button i.circle, .bg-color, .home-fullpage p, .home-fullpage a:hover, .timeline > li:hover > .timeline-badge, ul.side-menu li.active:before, #twosides-menu, .subline-bar, .accordion-list .list-group-item:before, .advs-box-multiple div.circle, .box-social-page, .btn, .circle-button .navbar-inner .nav:not(.ms-rounded) li a:before, .timeline > li:hover > .timeline-badge {
    background-color: [MAIN-COLOR];
}

div .woocommerce a.button.alt:hover,[class*="col-md-"].boxed, .fa-angle-up.scroll-top, .call-action-box, .ul-dots li:before, .flex-control-paging li a.flex-active, .header-bootstrap, .flex-control-paging li a:hover, .progress-bar, .btn-default:active, .btn-default.active, .open > .dropdown-toggle.btn-default, .adv-img-half-content .sub-text, .ot-dtp-picker .ot-dtp-picker-button:hover {
    background-color: [HOVER-COLOR] !important;
}

.niche-box-testimonails-cloud.box-black p {
    background-color: [MAIN-COLOR] !important;
}

.white .btn:not(.btn-border), .nav.inner.ms-rounded li a, .nav-pills > li > a {
    background-color: [MAIN-COLOR] !important;
    border-color: [MAIN-COLOR] !important;
}

    .btn:not(.btn-border):hover, .white .btn:not(.btn-border):hover, .nav.inner.ms-rounded li a:hover, .nav-pills > li > a:hover, .nav-pills > li.active > a, .advs-box.boxed, [class*="col-md-"].boxed {
        background-color: [HOVER-COLOR] !important;
        border-color: [HOVER-COLOR] !important;
    }

div.adv-img-side-content .btn:hover, .list-items .list-item span, div.adv-img-side-content .btn:hover i, .datepicker-panel > ul > li.picked, .datepicker-panel > ul > li.picked:hover {
    border-color: [HOVER-COLOR] !important;
    color: [HOVER-COLOR] !important;
}

.ot-dtp-picker .ot-dtp-picker-button {
    background-color: [MAIN-COLOR] !important;
    box-shadow: 0 0 0 1px [MAIN-COLOR] !important;
}

.niche-box-post.boxed .block-infos {
    border-color: [MAIN-COLOR] !important;
}

.circle-button, .btn-border, .btn, .social-group i.circle, .social-button i.circle {
    border-color: [MAIN-COLOR];
}

.tab-box > .panel, .niche-box-team .content-box hr, hr.e, .datepicker-top-left, .datepicker-top-right {
    border-top-color: [MAIN-COLOR] !important;
}

.title-base.text-left p .img-box.adv-img-half-content .caption {
    border-left-color: [MAIN-COLOR] !important;
}

.list-items .list-item:hover, .title-modern h2, .tab-box.inverse .panel, .datepicker-top-left:before, .datepicker-top-right:before, .navbar .nav > li.active {
    border-bottom-color: [MAIN-COLOR] !important;
}


.subline-bar li:hover, .navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus, .btn:hover {
    background-color: [HOVER-COLOR] !important;
}

.white .btn-border:hover {
    color: [HOVER-COLOR] !important;
}

.btn-border:hover {
    border-color: [HOVER-COLOR] !important;
}

.advs-box-top-icon.boxed .icon {
    background-color: [HOVER-COLOR] !important;
    border-color: [HOVER-COLOR] !important;
}

.btn:hover, body div .btn.white:hover, .nav.ms-minimal > li.active > a, .nav.ms-minimal > li:hover > a {
    border-color: [HOVER-COLOR] !important;
}';
?>
