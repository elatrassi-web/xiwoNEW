<?php
/**
 * The template for displaying all single offers
 */

get_header();
?>

<main id="primary" class="site-main single-offre-page">
    <?php
    while ( have_posts() ) :
        the_post();
        ?>
        <div class="container">
            <article id="post-<?php the_ID(); ?>" <?php post_class('single-offer-container'); ?>>

                <div class="offer-hero glass-panel">
                    <div class="offer-hero-content">
                        <?php
                        $regions = get_the_terms( get_the_ID(), 'region' );
                        if ( $regions && ! is_wp_error( $regions ) ) {
                            $region_names = array();
                            foreach ( $regions as $region ) {
                                $region_names[] = $region->name;
                            }
                            echo '<div class="offer-regions badge-neon">Disponible en : ' . esc_html( join( ', ', $region_names ) ) . '</div>';
                        }
                        ?>

                        <h1 class="entry-title neon-text"><?php the_title(); ?></h1>

                        <?php
                        $prix = get_post_meta( get_the_ID(), 'prix_mensuel', true );
                        $prix_promo = get_post_meta( get_the_ID(), 'prix_promo', true );

                        if ( $prix ) {
                            echo '<div class="offer-price-big">';
                            if ( $prix_promo ) {
                                echo '<span class="price-value neon-text">' . esc_html( $prix_promo ) . '</span><span class="price-period">/mois pendant 2 mois</span>';
                                echo '<div class="price-normal">Puis ' . esc_html( $prix ) . '/mois</div>';
                            } else {
                                echo '<span class="price-value neon-text">' . esc_html( $prix ) . '</span><span class="price-period">/mois</span>';
                            }
                            echo '</div>';
                        }
                        ?>

                        <a href="https://subscribe.xiwo.fr/inscription-en-ligne" class="btn-neon btn-large mt-4">Souscrire maintenant</a>
                    </div>

                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="offer-hero-image">
                            <?php the_post_thumbnail('large', array('class' => 'glass-image')); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="offer-details-grid">
                    <div class="offer-content glass-panel">
                        <h2 class="neon-text">Détails de l'offre</h2>
                        <?php the_content(); ?>
                    </div>

                    <div class="offer-specs glass-panel">
                        <h3>Spécifications Techniques</h3>
                        <ul class="tech-specs-list">
                            <?php
                            $debit_desc = get_post_meta( get_the_ID(), 'debit_descendant', true );
                            $debit_mont = get_post_meta( get_the_ID(), 'debit_montant', true );

                            if ( $debit_desc ) echo '<li><span class="spec-icon">⬇️</span> <strong>Débit descendant:</strong> Jusqu\'à ' . esc_html( $debit_desc ) . '</li>';
                            if ( $debit_mont ) echo '<li><span class="spec-icon">⬆️</span> <strong>Débit montant:</strong> Jusqu\'à ' . esc_html( $debit_mont ) . '</li>';
                            ?>
                            <li><span class="spec-icon">📡</span> <strong>Équipement:</strong> XIWO BOX dernière génération</li>
                            <li><span class="spec-icon">🔒</span> <strong>Engagement:</strong> Sans engagement</li>
                        </ul>
                    </div>
                </div>

            </article><!-- #post-<?php the_ID(); ?> -->
        </div>
        <?php
    endwhile; // End of the loop.
    ?>
</main>

<?php
get_footer();
