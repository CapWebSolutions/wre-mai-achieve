<?php
if ( class_exists( 'acf' ) ) {
    $title       = get_sub_field( 'title' );
    $description = get_sub_field( 'description' );
}
if ( ! empty( $title ) || ! empty( $description ) ) {
    ?>
    <div class="main-content text-center">
        <div class="container">
            <div class="inner">
                <?php if(!empty($title)) { ?>
                <div class="title-part blue-line"><h2><?php echo $title; ?></h2></div>
                <?php } ?>
                <?php echo $description; ?>
            </div>
        </div>
    </div>
<?php } ?>
