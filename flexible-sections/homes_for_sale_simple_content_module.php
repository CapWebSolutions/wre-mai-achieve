<?php
if ( class_exists( 'acf' ) ) {
    $description = get_sub_field( 'description' );
}
if ( ! empty( $description ) ) {
    ?>
    <div class="simple_text_sec">
        <div class="container">
            <div class="simple_text_div">
                <?php echo $description; ?>
            </div>
        </div>
    </div>
<?php } ?>
