<?php

/**
 * Mai Achieve theme.
 *
 * @package   BizBudding\MaiAchieve
 * @link      https://bizbudding.com/
 * @author    BizBudding
 * @copyright Copyright © 2020 BizBudding
 * @license   GPL-2.0-or-later
 */

require_once __DIR__ . '/vendor/autoload.php';

/**********************************
 * Add your customizations below! *
 **********************************/

// Use shortcodes in widgets
add_filter('widget_text', 'do_shortcode');

// Add Custom Custom ICon

add_filter('simple_social_default_profiles', 'custom_add_new_simple_icon');

function custom_add_new_simple_icon($icons)
{
    $icons['my-google-business-icon'] = [
        'label'   => __('My Google Business', 'simple-social-icons'),
        'pattern' => '<li class="social-mgb-icon"><a href="%s" %s><svg role="img" class="social-mgb-icon-svg" aria-labelledby="social-mgb-icon"><title id="social-mgb-icon">' . __('My Google Business', 'simple-social-icons') . '</title><use xlink:href="' . esc_url(get_site_url() . '/wp-content/themes/mai-law-pro/svg/business.svg#social-mgb-icon') . '"></use></svg></a></li>',
    ];

    return $icons;
}


add_filter('simple_social_default_profiles', 'custom_add_zillow_icon');

function custom_add_zillow_icon($icons)
{

    $icons['my-zillow-icon'] = [
        'label'   => __('zillow', 'simple-social-icons'),
        'pattern' => '<li class="social-zillow-icon"><a href="%s" %s><svg role="img" class="social-zillow-icon-svg" aria-labelledby="social-zillow-icon"><title id="social-zillow-icon">' . __('zillow', 'simple-social-icons') . '</title><use xlink:href="' . esc_url(get_site_url() . '/wp-content/themes/mai-law-pro/svg/zillow.svg#social-zillow-icon') . '"></use></svg></a></li>',
    ];

    return $icons;
}


add_filter('simple_social_default_styles', 'custom_add_new_icon_default');

function custom_add_new_icon_default($defaults)
{
    $defaults['my-google-business-icon'] = '';

    return $defaults;
}



add_filter('simple_social_default_styles', 'custom_add_zillow_icon_default');

function custom_add_zillow_icon_default($defaults)
{
    $defaults['my-zillow-icon'] = '';

    return $defaults;
}


/*24-08-2022*/ 
require get_stylesheet_directory() . '/includes/custom-include.php';


add_filter('gform_init_scripts_footer', 'init_scripts');
function init_scripts() {
    return true;
}