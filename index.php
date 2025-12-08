<?php
/**
 * The main template file
 *
 * @package Alyka
 * @author Jeremy Chen
 * @since 1.0.0
 */

get_header();
?>

<main class="site-main container">
    <h1>Blog</h1>

    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="entry-meta">
                    <span class="posted-on"><?php echo get_the_date(); ?></span>
                </div>
                <div class="entry-summary">
                    <?php the_excerpt(); ?>
                </div>
            </article>
            <?php
        endwhile;

        the_posts_pagination();
    else :
        ?>
        <p>No posts found.</p>
        <?php
    endif;
    ?>
</main>

<?php
get_footer();
