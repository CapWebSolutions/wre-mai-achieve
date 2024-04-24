<?php
if ( class_exists( 'acf' ) ) {
    $form_title     = get_sub_field( 'form_title' );
    $form_shortcode = get_sub_field( 'form_shortcode' );
}
if ( ! empty( $form_title ) || ! empty( $form_shortcode ) ) {
    ?>
    <div class="main-subscription">
        <div class="container">
            <?php if ( ! empty( $form_title ) ) { ?>
                <div class="title-part text-center green-line blue-text">
                    <h2><?php echo $form_title; ?></h2>
                </div>
            <?php } if ( ! empty( $form_shortcode ) ) { ?>
                <div class="subscription-form ">
                    <?php echo do_shortcode( $form_shortcode ); ?>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>
