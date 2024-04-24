<?php
if ( class_exists( 'acf' ) ) {
    $title          = get_sub_field( 'title' );
    $popup_contents = get_sub_field( 'popup_contents' );
}
if ( ! empty( $title ) || ! empty( $popup_contents ) ) {
    ?>
    <div class="video-popup" id="video-popup-section">
        <div class="container">
            <?php if ( ! empty( $title ) ) { ?>
                <div class="title-part text-center green-line">
                    <h2><?php echo $title; ?></h2>	
                </div>
            <?php } ?>
            <?php if ( ! empty( $popup_contents ) ) { ?>
                <div class="video-wrapper flex row-wrap">
                    <!-- 1st -->

                    <?php
                    foreach ( $popup_contents as $pop_key => $pop_value ) {
                        $video_bg       = $pop_value[ 'video_background_image' ];
                        $video_bg_url   = ! empty( $video_bg ) ? $video_bg[ 'url' ] : '#';
                        $video_bg_alt   = ! empty( $video_bg[ 'alt' ] ) ? $video_bg[ 'alt' ] : get_bloginfo();
                        $video_subtitle = $pop_value[ 'video_subtitle' ];
                        $video_url      = $pop_value[ 'video_url' ];
                        ?>
                        <div class="video">
                            <div class="image">
                                <?php if ( ! empty( $video_bg ) ) { ?>
                                    <img src="<?php echo $video_bg_url; ?>" alt="<?php echo $video_bg_alt; ?>">
                                <?php } ?>
                                <?php if ( ! empty( $video_url ) ) { ?>
                                    <a class="" data-fancybox="" target="_blank" href="<?php echo $video_url; ?>">
                                        <img class="play-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/play-button.png" alt="play-icon" width="68px" height="68px">
                                    </a>
                                <?php } ?>
                            </div>
                            <?php if ( ! empty( $video_subtitle ) ) { ?>
                                <div class="title text-center"><?php echo $video_subtitle; ?></div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>

        </div>
    </div>
<?php } ?>
