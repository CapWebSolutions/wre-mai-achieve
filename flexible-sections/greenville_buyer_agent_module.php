<?php
if ( class_exists( 'acf' ) ) {
    $top_title       = get_sub_field( 'top_title' );
    $top_description = get_sub_field( 'top_description' );
    $agent_content   = get_sub_field( 'agent_content' );
    $cta_label       = get_sub_field( 'cta_label' );
}
if ( ! empty( $top_title ) || ! empty( $top_description ) || ! empty( $agent_content ) || ! empty( $cta_label ) ) {
    ?>
    <div class="main-content bottom-content" id="buyer-agent">
        <div class="container">
            <div class="title-part">
                <?php if ( ! empty( $top_title ) ) { ?>
                    <div class="title text-center green-line">
                        <h2><?php echo $top_title; ?></h2>
                    </div>
                <?php } if ( ! empty( $top_description ) ) { ?>
                    <div class="content">
                        <?php echo $top_description; ?>
                    </div>
                <?php } ?>
            </div>
            <?php
            if ( ! empty( $agent_content ) ) {
                foreach ( $agent_content as $agent_key => $agent_value ) {
                    $title       = $agent_value[ 'title' ];
                    $image       = $agent_value[ 'image' ];
                    $image_url   = ! empty( $image ) ? $image[ 'url' ] : '#';
                    $image_alt   = ! empty( $image[ 'alt' ] ) ? $image[ 'alt' ] : get_bloginfo();
                    $description = $agent_value[ 'description' ];
                    if ( ! empty( $title ) ) {
                        ?>
                        <h2><?php echo $title; ?></h2>
                    <?php } if ( ! empty( $image ) ) { ?>
                        <img class="right" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
                        <?php
                    }
                    echo $description;
                }
            }
            if ( ! empty( $cta_label ) ) {
                ?>
                <div class="blue-btn text-center">
                    <a href="#talk-don"  onclick="fathom.trackEvent('talk-don-first-button click');"><?php echo $cta_label; ?></a>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>
