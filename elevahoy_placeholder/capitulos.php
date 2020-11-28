<?php
/**
* Template Name: Capitulos
*/
?>

<?php get_header(); ?>
<?php get_template_part('includes/nav'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="page-welcome">
        <div class="container">
            <h1><?php the_title() ?></h1>
            <h3 class="canvas-sub-title">Empiece con el capitluo uno. Despues recebiere codigos para continuar para el siguiente capitulo.</h3>
        </div>
    </div>

    <div class="container" id="chapters">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <a href="http://elevahoy.com/capitulos/capitulo-1/">
                    <div class="chapter-box">
                        <h2 class="text-center">Capitulo<br>1</h2>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="http://elevahoy.com/capitulos/capitulo-2/">
                    <div class="chapter-box">
                        <h2 class="text-center">Capitulo<br>2</h2>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="http://elevahoy.com/capitulos/capitulo-3/">
                    <div class="chapter-box">
                        <h2 class="text-center">Capitulo<br>3</h2>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="http://elevahoy.com/capitulos/capitulo-4/">
                    <div class="chapter-box">
                        <h2 class="text-center">Capitulo<br>4</h2>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="http://elevahoy.com/capitulos/capitulo-5/">
                    <div class="chapter-box">
                        <h2 class="text-center">Capitulo<br>5</h2>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="http://elevahoy.com/capitulos/capitulo-6/">
                    <div class="chapter-box">
                        <h2 class="text-center">Capitulo<br>6</h2>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="http://elevahoy.com/capitulos/capitulo-7/">
                    <div class="chapter-box">
                        <h2 class="text-center">Capitulo<br>7</h2>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="http://elevahoy.com/capitulos/capitulo-8/">
                    <div class="chapter-box">
                        <h2 class="text-center">Capitulo<br>8</h2>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="http://elevahoy.com/capitulos/capitulo-9/">
                    <div class="chapter-box">
                        <h2 class="text-center">Capitulo<br>9</h2>
                    </div>
                </a>
            </div>
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
