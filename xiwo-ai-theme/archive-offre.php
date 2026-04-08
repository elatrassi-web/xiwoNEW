<?php
/**
 * The template for displaying archive of offers
 */

get_header();
?>

<main id="primary" class="site-main archive-offres">
    <header class="page-header container">
        <h1 class="page-title">Nos <span class="neon-text">Offres</span></h1>
        <p class="archive-description">Découvrez l'ensemble de nos forfaits Internet et TV.</p>

        <div class="region-filter glass-panel">
            <span>Filtrer par région : </span>
            <?php
            $terms = get_terms( array(
                'taxonomy'   => 'region',
                'hide_empty' => false,
            ) );
            if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
                echo '<ul class="region-list">';
                echo '<li><a href="' . get_post_type_archive_link( 'offre' ) . '" class="btn-outline active">Toutes</a></li>';
                foreach ( $terms as $term ) {
                    echo '<li><a href="' . esc_url( get_term_link( $term ) ) . '" class="btn-outline">' . esc_html( $term->name ) . '</a></li>';
                }
                echo '</ul>';
            }
            ?>
        </div>
    </header>

    <div class="container offers-grid">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                ?>
                <div class="offer-card glass-panel">
                    <div class="offer-header">
                        <h3 class="offer-name"><?php the_title(); ?></h3>
                        <?php
                        $debit = get_post_meta( get_the_ID(), 'debit_max', true );
                        if ( $debit ) echo '<div class="offer-speed">' . esc_html( $debit ) . '</div>';
                        ?>
                    </div>

                    <div class="offer-price-area">
                        <?php
                        $prix = get_post_meta( get_the_ID(), 'prix_mensuel', true );
                        if ( $prix ) {
                            echo '<div class="offer-price"><span class="price-value neon-text">' . esc_html( $prix ) . '</span><span class="price-period">/mois</span></div>';
                        }
                        ?>
                    </div>

                    <div class="offer-excerpt">
                        <?php the_excerpt(); ?>
                    </div>

                    <a href="<?php the_permalink(); ?>" class="btn-neon offer-btn">Voir les détails</a>
                </div>
                <?php
            endwhile;

            the_posts_navigation();

        else :
            echo '<p class="glass-panel">Aucune offre disponible pour le moment.</p>';
        endif;
        ?>
    </div>
</main>

<?php
get_footer();
