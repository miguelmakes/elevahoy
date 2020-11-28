<?php get_header(); ?>
<?php get_template_part('includes/nav'); ?>

<div class="container">
    <h1 class="hidden">Blog</h1>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="canvas-media">
            <div class="canvas-media-head">
                <h2 class="canvas-section-title">
                    <?php the_title(); ?><small> by: <?php the_author(); ?></small>
                </h2>
                <span class="canvas-post-date"><?php the_date(); ?></span>
            </div>

            <?php if (has_post_thumbnail( $post->ID ) ): ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                <img class="canvas-media-img" src="<?php echo $image[0]; ?>" alt="">
            <?php endif; ?>

            <div class="canvas-media-body-single">
                <?php the_content(); ?>
                <?php comments_template(); ?>
            </div>
        </div>

    <!-- post -->
    <?php endwhile; ?>
    <!-- post navigation -->
    <?php else: ?>
    <!-- no posts found -->
    <?php endif; ?>
</div>
<!-- /container -->

<?php get_template_part('includes/signature'); ?>
<?php get_footer(); ?>
