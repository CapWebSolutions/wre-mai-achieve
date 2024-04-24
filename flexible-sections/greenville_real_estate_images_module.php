<?php
if ( class_exists( 'acf' ) ) {
    $title          = get_sub_field( 'title' );
    $images_content = get_sub_field( 'images_content' );
}
if ( ! empty( $title ) || ! empty( $images_content ) ) {
    ?>
    <div class="main-image-link">
        <div class="container">
            <?php if ( ! empty( $title ) ) { ?>
                <div class="title-part text-center green-line">
                    <h2><?php echo $title; ?></h2>
                </div>
            <?php } ?>
            <?php if ( ! empty( $images_content ) ) { ?>
                <div class="image-link-wrap flex row-wrap">
                    <?php
                    foreach ( $images_content as $content_key => $content_value ) {
                        $overlay_link   = $content_value[ 'overlay_link' ];
                        $image          = $content_value[ 'image' ];
                        $image_url      = ! empty( $image ) ? $image[ 'url' ] : '#';
                        $image_alt      = ! empty( $image[ 'alt' ] ) ? $image[ 'alt' ] : get_bloginfo();
                        $image_subtitle = $content_value[ 'image_subtitle' ];
                        if ( ! empty( $image_subtitle ) || ! empty( $image ) ) {
                            ?>
                            <div class="image-link">
                                <a class="overlay-link" href="<?php echo $overlay_link; ?>"></a>
                                <?php if ( ! empty( $image ) ) { ?>
                                    <div class="image"><img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>"></div>
                                <?php } ?>
                                <?php if ( ! empty( $image_subtitle ) ) { ?>
                                    <div class="title text-center"><?php echo $image_subtitle; ?></div>
                                <?php } ?>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>
