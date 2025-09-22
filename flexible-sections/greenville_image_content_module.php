<?php
if ( class_exists( 'acf' ) ) {
    $image             = get_sub_field( 'image' );
    $image_url         = ! empty( $image ) ? $image[ 'url' ] : '#';
    $image_alt         = ! empty( $image[ 'alt' ] ) ? $image[ 'alt' ] : get_bloginfo();
    $title             = get_sub_field( 'title' );
    $description_title = get_sub_field( 'description_title' );
    $description       = get_sub_field( 'description' );
    $below_image_content = get_sub_field( 'below_image_content' );
}
if ( ! empty( $image ) || ! empty( $title ) || ! empty( $description ) || ! empty( $description_title ) ) {
    ?>
    <div class="image-content">
        <div class="container">
            <?php if ( ! empty( $title ) ) { ?>
                <div class="title-part text-center blue-line">
                    <h2><?php echo $title; ?></h2>
                </div>
            <?php } ?>
            <div class="inner flex">
                <?php if ( ! empty( $image ) ) { ?>
                    <div class="right">
                        <div class="content-wrap">
                            <div class="image">
                                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
                                <!-- <div class="over-text">Don wessel - Exclusive Buyer's Agent</div> -->
                            </div>
                            <?php if ( ! empty( $below_image_content ) ) { ?>
                                <div class="content-additional">
                                    <?php echo $below_image_content; ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>

                <?php if ( ! empty( $description_title ) || ! empty( $description ) ) { ?>
                    <div class="right">
                        <div class="content-wrap">
                            <?php if ( ! empty( $description_title ) ) { ?>
                                <div class="blue-text title text-center">
                                    <h4><?php echo $description_title; ?></h4>
                                </div>
                            <?php } ?>
                            <?php if ( ! empty( $description ) ) { ?>
                                <div class="content">
                                    <?php echo $description; ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
<?php } ?>
