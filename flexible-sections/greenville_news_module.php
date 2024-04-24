<?php
if ( class_exists( 'acf' ) ) {
    $title            = get_sub_field( 'title' );
    $select_news_type = get_sub_field( 'select_news_type' );
    $select_news      = get_sub_field( 'select_news' );
}
if ( $select_news_type && ! empty( $select_news ) ) {
    $args = array (
        'post_type'   => 'post',
        'post_status' => 'publish',
        'post__in'    => $select_news,
        'orderby'     => 'post__in',
    );
} elseif ( ! $select_news_type ) {
    $args = array (
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page' => 3,
    );
}
$posts      = new WP_Query( $args );
$post_count = $posts->post_count;
if ( ! empty( $title ) || ($post_count > 0) ) {
    ?>
    <div class="real-estate-news">
        <div class="container">
            <?php if ( ! empty( $title ) ) { ?>
                <div class="title-part text-center">
                    <h2><?php echo $title; ?></h2>
                </div>
            <?php } ?>
            <?php if ( $posts->have_posts() ) { ?>
                <div class="estate-news-wrap flex row-wrap">
                    <!-- 1st -->
                    <?php
                    while ( $posts->have_posts() ) {
                        $posts->the_post();
                        $post_id        = get_the_ID();
                        $post_title     = get_the_title();
                        $post_content   = wp_trim_words( get_the_content(), 14 );
                        $post_thumbnail = get_the_post_thumbnail_url();
                        $img_id         = get_post_thumbnail_id( $post_id );
                        $image_alt      = get_post_meta( $img_id, '_wp_attachment_image_alt', true );
                        $post_permalink = get_the_permalink();
                        ?>
                        <div class="estate-news">
                            <div class="image"  style="background:url(<?php echo $post_thumbnail; ?>)no-repeat center / cover;"></div>
                            <div class="content-wrap text-center">
                                <?php if ( ! empty( $post_title ) ) { ?>
                                    <h4><?php echo $post_title; ?></h4>
                                <?php } ?>
                                <?php if ( ! empty( $post_content ) ) { ?>
                                    <div class="content"><p><?php echo $post_content; ?></p></div>
                                <?php } ?>
                                <div class="green-btn"><a href="<?php echo $post_permalink; ?>"><?php _e( 'Read More', 'wessel' ); ?></a></div>
                            </div>
                        </div>
                        <?php
                    }
                    wp_reset_query();
                    wp_reset_postdata();
                    ?>
                </div>
            <?php } ?>

        </div>
    </div>
<?php } ?>
