<?php
if ( class_exists( 'acf' ) ) {
    $title       = get_sub_field( 'title' );
    $description = get_sub_field( 'description' );
    $name        = get_sub_field( 'name' );
    $cta         = get_sub_field( 'cta' );
}
if ( ! empty( $title ) || ! empty( $description ) || ! empty( $cta ) || ! empty( $name ) ) {
    ?>
    <div class="testimonial-content">
        <div class="container">
            <?php if ( ! empty( $title ) ) { ?>
                <div class="title-part text-center blue-line">
                    <h2><?php echo $title; ?></h2>
                </div>
            <?php } if ( ! empty( $description ) || ! empty( $name ) ) { ?>
                <div class="content semibold-content italic text-center">
                    <?php echo $description; ?>
                    <?php if ( ! empty( $name ) ) { ?>
                        <div class="client-name"><?php echo $name; ?></div>
                    <?php } ?>
                </div>
            <?php } if ( ! empty( $cta ) ) { ?>
                <div class="blue-btn text-center btn-top">
                    <a href="<?php echo $cta[ 'url' ]; ?>" target="<?php echo $cta[ 'target' ]; ?>"><?php echo $cta[ 'title' ]; ?></a>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>
