<?php
/**
 * Alyka Theme Index (Main Template)
 */
get_header(); ?>

<div class="container">
    <main class="content">
        <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                        <div class="entry-meta">
                            <span class="posted-on">Posted on <?php echo get_the_date(); ?></span>
                            <span class="byline">by <?php the_author(); ?></span>
                        </div>
                    </header>

                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>

                    <footer class="entry-footer">
                        <?php the_tags( '<span class="tag-links">', ', ', '</span>' ); ?>
                    </footer>
                </article>
                <?php
            }

            // Pagination
            the_posts_pagination();
        } else {
            ?>
            <p><?php _e( 'No posts found.', 'alyka' ); ?></p>
            <?php
        }
        ?>
    </main>

    <?php
    get_sidebar();
    ?>
</div>

<?php get_footer();
