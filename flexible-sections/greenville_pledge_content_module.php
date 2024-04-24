<?php
if ( class_exists( 'acf' ) ) {
    $title       = get_sub_field( 'title' );
    $description = get_sub_field( 'description' );
    $cta         = get_sub_field( 'cta' );
}
if ( ! empty( $title ) || ! empty( $description ) || ! empty( $cta ) ) {
    ?>
    <div class="main-content">
        <div class="container">
            <?php if ( ! empty( $title ) ) { ?>
                <div class="title-part text-center">
                    <h2><?php echo $title; ?></h2>
                </div>
            <?php } if ( ! empty( $description ) ) { ?>
                <div class="content semibold-content">
                    <?php echo $description; ?>
                </div>
            <?php } if ( ! empty( $cta ) ) { ?>
                <div class="blue-btn text-center btn-top">
                    <a href="#buyer-agent" onclick="fathom.trackEvent('why-buyer-agent-button click');"><?php echo $cta; ?></a>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>
