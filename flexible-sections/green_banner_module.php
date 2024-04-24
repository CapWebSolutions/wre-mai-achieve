<?php
if ( class_exists( 'acf' ) ) {
    $banner_image     = get_sub_field( 'banner_image' );
    $banner_image_url = ! empty( $banner_image ) ? $banner_image[ 'url' ] : '#';
    $banner_image_alt = ! empty( $banner_image[ 'alt' ] ) ? $banner_image[ 'alt' ] : get_bloginfo();
    $title            = get_sub_field( 'title' );
    $subtitle         = get_sub_field( 'subtitle' );
    $description      = get_sub_field( 'description' );
    $cta              = get_sub_field( 'cta' );
    $form_title       = get_sub_field( 'form_title' );
    $form_shortcode   = get_sub_field( 'form_shortcode' );
}
if ( ! empty( $banner_image ) || ! empty( $title ) || ! empty( $subtitle ) || ! empty( $description ) || ! empty( $cta ) || ! empty( $form_shortcode ) || ! empty( $form_title ) ) {
    ?>
    <div class="banner-hero" id="talk-don" style="background:url(<?php echo $banner_image_url; ?>)no-repeat center / cover;">
        <div class="container">
            <div class="inner flex">
                <div class="left-content white-text">
                    <div class="content-wrap">
                        <?php if ( ! empty( $title ) ) { ?>
                            <div class="title green-line">
                                <h1><?php echo $title; ?></h1>
                            </div>
                        <?php } if ( ! empty( $subtitle ) ) { ?>
                            <div class="sub-title">
                                <h2><?php echo $subtitle; ?></h2>
                            </div>
                        <?php } if ( ! empty( $description ) ) { ?>
                            <div class="content">
                                <?php echo $description; ?>
                            </div>
                        <?php } if ( ! empty( $cta ) ) { ?>
                            <div class="green-btn hero-btn">
                                <a href="https://homes.wesselrealestate.com/idx/homevaluation" onclick="fathom.trackEvent('video-popup-section-button click');"><?php echo $cta; ?></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <?php if ( ! empty( $form_title ) || ! empty( $form_shortcode ) ) { ?>
                    <div class="right-form">
                        <div class="chat-form">
                            <?php if ( ! empty( $form_title ) ) { ?>
                                <h3 class="form-title"><?php echo $form_title; ?></h3>
                            <?php } ?>
                            <?php echo do_shortcode( $form_shortcode ); ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>
