<?php
if ( ! empty( 'wessel_flexible_sections' ) ) {
    while ( have_rows( 'wessel_flexible_sections' ) ) {
        the_row();
        if ( get_row_layout() == 'green_banner_module' ) {
            get_template_part( 'flexible-sections/green_banner_module' );
        } elseif ( get_row_layout() == 'greenville_image_content_module' ) {
            // get_template_part( 'flexible-sections/greenville_image_content_module' );
            // get_template_part( 'flexible-sections/greenville_image_content_module_multi_image' );
            get_template_part( 'flexible-sections/greenville_image_content_module_additional_content' );
        } elseif ( get_row_layout() == 'greenville_pledge_content_module' ) {
            get_template_part( 'flexible-sections/greenville_pledge_content_module' );
        } elseif ( get_row_layout() == 'greenville_videos_popup_module' ) {
            get_template_part( 'flexible-sections/greenville_videos_popup_module' );
        } elseif ( get_row_layout() == 'greenville_testimonial_content_module' ) {
            get_template_part( 'flexible-sections/greenville_testimonial_content_module' );
        } elseif ( get_row_layout() == 'greenville_real_estate_images_module' ) {
            get_template_part( 'flexible-sections/greenville_real_estate_images_module' );
        } elseif ( get_row_layout() == 'greenville_real_estate_market_module' ) {
            get_template_part( 'flexible-sections/greenville_real_estate_market_module' );
        } elseif ( get_row_layout() == 'greenville_news_module' ) {
            get_template_part( 'flexible-sections/greenville_news_module' );
        } elseif ( get_row_layout() == 'greenville_news_subscription_form_module' ) {
            get_template_part( 'flexible-sections/greenville_news_subscription_form_module' );
        } elseif ( get_row_layout() == 'greenville_buyer_agent_module' ) {
            get_template_part( 'flexible-sections/greenville_buyer_agent_module' );
        } elseif ( get_row_layout() == 'homes_for_sale_simple_content_module' ) {
            get_template_part( 'flexible-sections/homes_for_sale_simple_content_module' );
        } elseif ( get_row_layout() == 'homes_for_sale_country_sc_module' ) {
            get_template_part( 'flexible-sections/homes_for_sale_country_sc_module' );
        } elseif ( get_row_layout() == 'homes_for_sale_market_content_module' ) {
            get_template_part( 'flexible-sections/homes_for_sale_market_content_module' );
        } elseif ( get_row_layout() == 'greenville_customer_rating_module' ) {
            get_template_part( 'flexible-sections/greenville_customer_rating_module' );
        }
    }
}