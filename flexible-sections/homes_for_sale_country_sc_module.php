<?php
if ( class_exists( 'acf' ) ) {
    $title        = get_sub_field( 'title' );
    $form_title   = get_sub_field( 'form_title' );
    $form_script  = get_sub_field( 'form_script' );
    $list_content = get_sub_field( 'list_content' );
}
if ( ! empty( $title ) || ! empty( $form_script ) || ! empty( $form_title ) || ! empty( $list_content ) ) {
    ?>
    <div class="homesforsale_list_section">
        <div class="container">
            <?php if ( ! empty( $title ) ) { ?>
                <div class="section_heading">
                    <div class="title">
                        <h2><?php echo $title; ?></h2>
                    </div>
                </div>
            <?php } ?>
            <!-- Don't Remove -->
            <?php if(!empty($list_content)) { ?>
            <div class="titlelink_list_div">
                <ul></ul>
            </div>
            <?php } ?>
            <?php if ( ! empty( $form_title ) || ! empty( $form_script ) ) { ?>
                <div class="intuitive_property_search">
                    <?php if ( ! empty( $form_title ) ) { ?>
                        <div class="form_content">
                            <p><?php echo $form_title; ?></p>
                        </div>
                    <?php } if ( ! empty( $form_script ) ) { ?>
                        <div class="form_div">
                            <p><?php echo do_shortcode( $form_script ); ?></p>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
            <!-- Repeat this Section -->
            <?php
            if ( ! empty( $list_content ) ) {
                foreach ( $list_content as $list_key => $list_value ) {
                    $cta_label = $list_value[ 'cta_label' ];
                    $list_title     = $list_value[ 'title' ];
                    $list_desc      = $list_value[ 'description' ];
                    $list_script    = $list_value[ 'content_script' ];
                    $list_cta__cta_label      = $list_value[ 'cta__cta_label' ];
                    $list_cta_label      = $list_value[ 'list_cta_label' ];
                    $list_cta       = $list_value[ 'list_cta' ];
                    $scrolling_sec_id      = $list_value[ 'scrolling_sec_id' ];
                    $view_all_button      = $list_value[ 'view_all_button' ];
                if ( ! empty( $cta_label ) || ! empty( $list_title ) || ! empty( $list_desc ) || ! empty( $list_script ) || ! empty( $list_cta )||! empty($list_cta_label)||! empty($scrolling_sec_id)||! empty($view_all_button) ) {
                        ?>
                        <div class="homesforsale_list">
                            <?php if ( ! empty( $cta_label ) ) { ?>
                                <div class="homesforsale_title">
                                    <?php echo $cta_label; ?>
                                </div>
                            <?php } if ( ! empty( $list_title ) || ! empty( $list_desc ) ) { ?>
                                <div class="section_heading">
                                    <?php if ( ! empty( $list_title ) ) { ?>
                                        <div class="title">
                                            <h2><?php echo $list_title; ?></h2>
                                        </div>
                                    <?php } ?>
                                    <!-- Add this as option if this one is blank then hide this div -->
                                    <?php if ( ! empty( $list_desc ) ) { ?>
                                        <div class="content">
                                            <?php echo $list_desc; ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php } if ( ! empty( $list_script ) ) { ?>
                                <div class="homesforsale_script">
                                    <div class="script_wrap">
                                        <?php echo $list_script; ?>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if ( ! empty( $view_all_button ) ) { ?>
                                <div class="homesforsale_btn blue-btn text-center">
                                    <a href="<?php echo $view_all_button[ 'url' ]; ?>" target="<?php echo $view_all_button[ 'target' ]; ?>">
                                        <?php echo $view_all_button[ 'title' ]; ?>
                                    </a>
                                </div>
                            <?php } ?>
                            <!-- Add this as option if this one is blank then hide this div -->
                            <?php if ( ! empty( $list_cta ) &&  $list_cta__cta_label) { ?>
                                <div class="homesforsale_btn blue-btn text-center secondary-btn">
                                    <a href="<?php echo $list_cta[ 'url' ]; ?>" target="<?php echo $list_cta[ 'target' ]; ?>">
                                        <?php echo $list_cta[ 'title' ]; ?>
                                    </a>
                                </div>
                            <?php } ?>
                            <?php if ( ! empty( $list_cta_label ) && (! $list_cta__cta_label)) { ?>
                                <div class="homesforsale_btn blue-btn text-center secondary-btn">
                                    <a href="#<?php echo $scrolling_sec_id; ?>">
                                        <?php echo $list_cta_label; ?>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>

                        <?php
                    }
                }
            }
            ?>
        </div>
    </div>
<?php } ?>
