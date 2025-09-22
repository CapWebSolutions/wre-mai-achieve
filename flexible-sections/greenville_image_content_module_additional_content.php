<?php
/**
 * This module has a hardcoded additional content below the 'Image' in the 
 * standard Greenville - Image Contnent Module.
 * 
 * Temporarily used to add another area of content below Don's head shot. 
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
                            <!-- New section of text content below primary image. TKT 4619 -->
                            <!-- <div class="content-wrap"> -->
                                <div class="content-additional">
                                    <?php echo "<br><br><p>If you'd like to learn more about what it's like to work with me, click on <a class='blue-text' href='https://stg-wesselrealestate-staging.kinsta.cloud/testimonials/'>Testimonials</a> at the top of the page to read what past clients have shared about their home-buying experience</p>"; ?>
                                </div>
                                <div class="content-additional text-center">
                                    <?php echo "<br><p><a class='blue-text' href='https://homes.wesselrealestate.com/idx/market-reports/b091/city/greenville-south-carolina'>Greenville SC, Market Report</a></p>"; ?>
                                </div>
                            <!-- </div> -->
                            <!-- End of New section of text content below primary image. TKT 4619 -->
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
