<?php
/**
* Template Name: Capitulo
*/
?>

<?php get_header(); ?>
<?php get_template_part('includes/nav'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="page-welcome">
        <div class="container">
            <h1><?php the_title() ?></h1>
            <h3 class="canvas-sub-title"><?php the_field("chapter_description"); ?></h3>
        </div>
    </div>

    <div class="container" id="chapter">
        <div id="lesson-wrapper" class="">
            <p><?php the_field("lesson"); ?></p>

            <br>

            <button type="button" class="btn btn-primary btn-lg canvas-btn" id="change-section">Preguntas</button>
        </div>

        <div id="questions-wrapper" class="hidden">
            <h4><?php the_field("question_1"); ?></h4>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Check me out
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Check me out
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Check me out
                </label>
            </div>

            <br>

            <h4><?php the_field("question_2"); ?></h4>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Check me out
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Check me out
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Check me out
                </label>
            </div>

            <br>

            <h4><?php the_field("question_3"); ?></h4>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Check me out
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Check me out
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Check me out
                </label>
            </div>

            <br>

            <a href="<?php the_field("next_page"); ?>" class="btn btn-primary btn-lg canvas-btn">Termine</a>
        </div>
    </div>
    <!-- /container -->

<!-- post -->
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<?php get_template_part('includes/signature'); ?>
<?php get_footer(); ?>
