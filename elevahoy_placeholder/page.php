<?php get_header(); ?>
<?php get_template_part('includes/nav'); ?>

<div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1 class="canvas-page-title text-center">
            <?php the_title() ?>
        </h1>

        <?php the_content(); ?>

    <!-- post -->
    <?php endwhile; ?>
    <!-- post navigation -->
    <?php else: ?>
    <!-- no posts found -->
    <?php endif; ?>
</div>
<!-- /container -->

<script type="text/javascript">
    alert("test");
</script>

<?php get_template_part('includes/signature'); ?>
<?php get_footer(); ?>
