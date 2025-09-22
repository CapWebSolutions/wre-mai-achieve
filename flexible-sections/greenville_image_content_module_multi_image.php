<?php
/**
 * This module has a hardcoded additional image below the 'Image' in the 
 * standard Greenville - Image Contnent Module.
 * 
 * Temporarily used to add another image below Don's head shot. 
 * 
 * Ideally this would be updated to use ACF custom fields to insert the image and link
 * values from the dashboard, but we, WRE, do not own the ACF license. 
 * 
 */
if ( class_exists( 'acf' ) ) {
    $image             = get_sub_field( 'image' );
    $image_url         = ! empty( $image ) ? $image[ 'url' ] : '#';
    $image_alt         = ! empty( $image[ 'alt' ] ) ? $image[ 'alt' ] : get_bloginfo();
    $title             = get_sub_field( 'title' );
    $description_title = get_sub_field( 'description_title' );
    $description       = get_sub_field( 'description' );
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
                            </div>
                            &nbsp;
                            <div class="blue-text title text-center">
                                <h4>Featured Listing</h4>
                            </div>
                            <div class="image">
                                <a href="https://homes.wesselrealestate.com/idx/details/listing/b091/1562652/875-W-Keepsake-Lane-Inman-SC">
                                    <img src="https://wesselrealestate.com/wp-content/uploads/2025/07/875_w_keepsake_ln._inman_sc.png" alt="875 W Keepsake Ln, Inman SC"></a>
                                    <figcaption class="enhanced">$410,000</figcaption>
                            </div>
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
