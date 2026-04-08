<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 */

get_header();
?>

    <main id="primary" class="site-main">
        <div class="container main-content-area">

        <?php
        if ( have_posts() ) :

            if ( is_home() && ! is_front_page() ) :
                ?>
                <header class="page-header glass-panel">
                    <h1 class="page-title"><?php single_post_title(); ?></h1>
                </header>
                <?php
            endif;

            /* Start the Loop */
            while ( have_posts() ) :
                the_post();
                ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class('glass-panel article-card'); ?>>
                    <header class="entry-header">
                        <?php
                        if ( is_singular() ) :
                            the_title( '<h1 class="entry-title neon-text">', '</h1>' );
                        else :
                            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="neon-text">', '</a></h2>' );
                        endif;
                        ?>
                    </header><!-- .entry-header -->

                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail('large'); ?>
                        </div><!-- .post-thumbnail -->
                    <?php endif; ?>

                    <div class="entry-content">
                        <?php
                        if ( is_singular() ) {
                            the_content();
                        } else {
                            the_excerpt();
                            echo '<a href="' . esc_url( get_permalink() ) . '" class="btn-outline">Lire la suite</a>';
                        }
                        ?>
                    </div><!-- .entry-content -->
                </article><!-- #post-<?php the_ID(); ?> -->

                <?php
            endwhile;

            the_posts_navigation(array(
                'prev_text' => '<span class="nav-prev-text">Plus anciens</span>',
                'next_text' => '<span class="nav-next-text">Plus récents</span>',
            ));

        else :
            ?>
            <section class="no-results not-found glass-panel">
                <header class="page-header">
                    <h1 class="page-title neon-text"><?php esc_html_e( 'Rien trouvé', 'xiwo-ai' ); ?></h1>
                </header><!-- .page-header -->

                <div class="page-content">
                    <p><?php esc_html_e( 'Il semble que nous ne puissions pas trouver ce que vous cherchez. Peut-être qu\'une recherche peut aider.', 'xiwo-ai' ); ?></p>
                    <?php get_search_form(); ?>
                </div><!-- .page-content -->
            </section><!-- .no-results -->
            <?php
        endif;
        ?>

        </div>
    </main><!-- #primary -->

<?php
get_footer();
