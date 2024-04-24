<?php
if ( class_exists( 'acf' ) ) {
    $market_content = get_sub_field( 'market_content' );
    $cta_label      = get_sub_field( 'cta_label' );
}
if ( ! empty( $market_content ) || ! empty( $cta_label ) ) {
    ?>
    <div class="main_content_section">
        <?php
        if ( ! empty( $market_content ) ) {
            foreach ( $market_content as $mkey => $mvalue ) {
                $title       = $mvalue[ 'title' ];
                $section_id  = $mvalue[ 'section_id' ];
                $description = $mvalue[ 'description' ];
                if ( ! empty( $title ) || ! empty( $description ) ) {
                    ?>
                    <div class="main_content_wrapper" id="<?php echo $section_id; ?>">
                        <div class="container">
                            <?php if ( ! empty( $title ) ) { ?>
                                <div class="section_heading">
                                    <div class="title">
                                        <h2><?php echo $title; ?></h2>
                                    </div>
                                </div>
                            <?php } if ( ! empty( $description ) ) { ?>
                                <div class="main_content_wrap">
                                    <?php echo $description; ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php
                }
            }
        }
        ?>

        <!-- Add this as option if this one is blank then hide this div -->
        <?php if ( ! empty( $cta_label ) ) { ?>
            <div class="main_content_btn blue-btn text-center btn-top">
                <a href="#talk-don">
                    <?php echo $cta_label; ?>
                </a>
            </div>
        <?php } ?>
    </div>
<?php } ?>
