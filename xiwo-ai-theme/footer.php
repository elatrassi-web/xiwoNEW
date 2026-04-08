    <footer id="colophon" class="site-footer">
        <div class="footer-container">
            <div class="footer-widgets">
                <div class="footer-widget brand-widget">
                    <h2 class="footer-logo"><?php bloginfo( 'name' ); ?></h2>
                    <p>L'expérience Ultime : Internet, Téléphonie Fixe et TV. Connectez-vous au futur dès aujourd'hui.</p>
                    <div class="contact-info">
                        <p><span class="neon-text">Besoin d'aide ?</span><br> 0980 80 15 00</p>
                    </div>
                </div>

                <div class="footer-widget links-widget">
                    <h3>Navigation</h3>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer',
                            'menu_id'        => 'footer-menu',
                            'fallback_cb'    => false,
                        )
                    );
                    ?>
                </div>

                <div class="footer-widget legal-widget">
                    <h3>Informations Légales</h3>
                    <ul>
                        <li><a href="#">Mentions légales</a></li>
                        <li><a href="#">Politique de cookies</a></li>
                        <li><a href="#">Plan du site</a></li>
                    </ul>
                </div>
            </div>

            <div class="site-info">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> - TOUS DROITS RÉSERVÉS.</p>
                <p class="disclaimer">*Offres soumises à conditions, sous réserve d’éligibilité technique. En Fibre : débit descendant théorique jusqu’à 5 Gbit/s.</p>
            </div><!-- .site-info -->
        </div>
    </footer><!-- #colophon -->
</div><!-- #page -->

<div class="cyber-overlay"></div>

<?php wp_footer(); ?>

</body>
</html>
