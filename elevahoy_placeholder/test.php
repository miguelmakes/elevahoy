<?php

/**
 * The template for displaying any single page.
 * Template Name: test
 */

?>

<?php get_header(); ?>

<div id="primary" class="row-fluid">
    <div id="content" role="main" class="span8 offset2">
        <?php
        if (have_posts()) :
            // Do we have any posts/pages in the databse that match our query?
            ?>
            <?php
            while (have_posts()) : the_post();
                // If we have a page to show, start a loop that will display it
                ?>

                <article class="post">
                    <div class="the-content">
                        <?php
                        the_content();
                        // This call the main content of the page, the stuff in the main text box while composing.
                        // This will wrap everything in p tags
                        ?>

                        <?php wp_link_pages(); // This will display pagination links, if applicable to the page  ?>
                    </div><!-- the-content -->
                </article>
            <?php endwhile; // OK, let's stop the page loop once we've displayed it  ?>
        <?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error)  ?>
            <article class="post error">
                <h1 class="404">Nothing posted yet</h1>
            </article>
        <?php endif; // OK, I think that takes care of both scenarios (having a page or not having a page to show) ?>

        <div id="firstlist">
            <?php
            /**
             * After we loop through the core content of the homepage page, we are going to create some custom loops to create fine tuned queries
             * Learn more: https://codex.wordpress.org/Class_Reference/WP_Query
             */
            /**
             * First custom query: posts_per_page
             * Controls: number of posts returned to query
             * Default: 10, or whatever is set in Settings->Reading
             */
            $args = array(
                /**
                 * This parameter says 'return x number of posts'; use -1 to return all available posts
                 */
                'posts_per_page' => 7,
                'cat' => 21
            );

            $count = 1;
            $custom_query = new WP_Query($args);

            if ($custom_query->have_posts()):
                ?>
                <h2>Posts per page example</h2>
                <ul class="artist-list">
                    <?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
                        <li><?php echo $count; ?>. <?php the_title(); ?></li>
                        <?php $count++; ?>
                    <?php endwhile; ?>
                </ul>
            <?php else: ?>
                <?php //this is a fallback, in case the query does not return anything ?>
                <p>There are no posts available for this query.</p>
            <?php endif; ?>
        </div>
        <!-- closes firstlist -->

    </div><!-- #content .site-content -->
</div><!-- #primary .content-area -->

<?php get_footer(); ?>
