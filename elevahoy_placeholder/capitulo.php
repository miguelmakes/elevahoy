<?php
/**
* Template Name: Capitulo
*/
?>

<?php get_header(); ?>
<?php get_template_part('includes/nav'); ?>

<div class="page-welcome">
    <div class="container">
        <h1><?php the_field("the_better_title"); ?></h1>
        <h3 class="canvas-sub-title"><?php the_field("chapter_description"); ?></h3>
    </div>
</div>

<div class="container" id="chapter">

    <div id="questions-wrapper" class="hidden">
        <h4><?php the_field("question_1"); ?></h4>
        <div class="checkbox">
            <label>
                <input type="checkbox"> Answer
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox"> Answer
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox"> Answer
            </label>
        </div>

        <br>

        <h4><?php the_field("question_2"); ?></h4>
        <div class="checkbox">
            <label>
                <input type="checkbox"> Answer
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox"> Answer
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox"> Answer
            </label>
        </div>

        <br>

        <h4><?php the_field("question_3"); ?></h4>
        <div class="checkbox">
            <label>
                <input type="checkbox"> Answer
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox"> Answer
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox"> Answer
            </label>
        </div>

        <br>

        <a href="<?php the_field("next_page"); ?>" class="btn btn-primary btn-lg canvas-btn" id="finish-chapter">Termine</a>
    </div>

    <?php $category_field = get_field("chapter_category"); ?>
    <?php query_posts("category_name=$category_field"); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php if ( post_password_required() ) : ?>
            <?php the_content(); ?>
        <?php else : ?>
            <div id="lesson-wrapper" class="">
                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit!</h3>

                <p><?php the_field("lesson"); ?></p>

                <br>

                <button type="button" class="btn btn-primary btn-lg canvas-btn" id="change-section">Preguntas</button>
            </div>
        <?php endif; ?>

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
