<?php
if ( class_exists( 'acf' ) ) {
    $title                 = get_sub_field( 'title' );
    $description           = get_sub_field( 'description' );
    $rating_slider_content = get_sub_field( 'rating_slider_content' );
}
if ( ! empty( $title ) || ! empty( $description ) || ! empty( $rating_slider_content ) ) {
    ?>
    <div class="rating-main-wrap">
        <div class="container">
            <div class="rating-heading-content-wrap text-center">
                <?php if ( ! empty( $title ) ) { ?>
                    <div class="title-part">
                        <h2><?php echo $title; ?></h2>
                    </div>
                <?php } if ( ! empty( $description ) ) { ?>
                    <div class="content">
                        <?php echo $description; ?>
                    </div>
                <?php } ?>
            </div>
            <?php if ( ! empty( $rating_slider_content ) ) { ?>
                <div class="rating-slider-main-wrap"> 
                    <?php
                    foreach ( $rating_slider_content as $rkey => $rvalue ) {
                        $image                 = $rvalue[ 'image' ];
                        $image_url             = ! empty( $image ) ? $image [ 'url' ] : '#';
                        $image_alt             = ! empty( $image [ 'alt' ] ) ? $image [ 'alt' ] : get_bloginfo();
                        $rating_description    = $rvalue[ 'rating_description' ];
                        $rating_star_image     = $rvalue[ 'rating_star_image' ];
                        $name_des              = $rvalue[ 'name_des' ];
                        $rating_star_image_url = ! empty( $rating_star_image ) ? $rating_star_image[ 'url' ] : '#';
                        $rating_star_image_alt = ! empty( $rating_star_image[ 'alt' ] ) ? $rating_star_image[ 'alt' ] : get_bloginfo();
                        if ( ! empty( $image ) || ! empty( $rating_description ) || ! empty( $rating_star_image ) || ! empty( $name_des ) ) {
                            ?>
                            <div class="rating-slide" >
                                <div class="rating-slide-card"> 
                                    <?php if ( ! empty( $image ) ) { ?>
                                        <div class="rating-slide-img" style="background: url(<?php echo $image_url; ?>) no-repeat center center / cover;"></div> 
                                    <?php } if ( ! empty( $rating_description ) ) { ?>
                                        <div class="rating-slide-text">
                                            <?php echo $rating_description; ?>
                                        </div>  
                                    <?php } if ( ! empty( $name_des ) ) { ?>
                                        <div class="rating-slide-details">
                                            <h6>
                                                <?php echo $name_des; ?>
                                            </h6>
                                        </div> 
                                    <?php } if ( ! empty( $rating_star_image ) ) { ?>
                                        <div class="rating-slide-stars"> 
                                            <img width="98" height="16" src="<?php echo $rating_star_image_url; ?>" alt="<?php echo $rating_star_image_alt; ?>">
                                        </div> 
                                    <?php } ?>
                                </div>
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
