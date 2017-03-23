<?php
global $post;
$args = array(
'posts_per_page'   => 6,
'offset'           => 0,
'category'         => '',
'category_name'    => 'nyheter',
'orderby'          => 'date',
'order'            => 'DESC',
'include'          => '',
'exclude'          => '',
'meta_key'         => '',
'meta_value'       => '',
'post_type'        => 'post',
'post_mime_type'   => '',
'post_parent'      => '',
'author'	   => '',
'author_name'	   => '',
'post_status'      => 'publish',
'suppress_filters' => true
);
$myposts = get_posts( $args );
?>

<div class="container news-area">
    <div class="row">
        <?php
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
            <div class="col-md-4">
                <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                <?php the_content(); ?>
                <a class="btn btn-secondary" href="<?php the_permalink(); ?>">Les mer »</a>
            </div>
        <?php endforeach;
        wp_reset_postdata();
        ?>
    </div>
</div>

legger

på