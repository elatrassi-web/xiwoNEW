<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Aller au contenu principal', 'xiwo-ai' ); ?></a>

    <header id="masthead" class="site-header glass-header">
        <div class="header-container">
            <div class="site-branding">
                <?php
                if ( has_custom_logo() ) :
                    the_custom_logo();
                else :
                    ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php
                    $xiwo_ai_description = get_bloginfo( 'description', 'display' );
                    if ( $xiwo_ai_description || is_customize_preview() ) :
                        ?>
                        <p class="site-description"><?php echo $xiwo_ai_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
                    <?php endif;
                endif;
                ?>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                </button>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'container_class'=> 'menu-primary-container',
                        'fallback_cb'    => false,
                    )
                );
                ?>
            </nav><!-- #site-navigation -->

            <div class="header-actions">
                <div class="region-selector">
                    <!-- Simulateur de sélection de région -->
                    <select id="region-select" class="glass-select">
                        <option value="">Sélectionnez votre zone</option>
                        <option value="hexagone">Hexagone</option>
                        <option value="guadeloupe">Guadeloupe</option>
                        <option value="martinique">Martinique</option>
                        <option value="guyane">Guyane Française</option>
                        <option value="saint-martin">Saint Martin</option>
                        <option value="saint-barthelemy">Saint Barthélémy</option>
                    </select>
                </div>
                <a href="https://subscribe.xiwo.fr/" class="btn-neon" target="_blank" rel="noopener">Espace Abonné</a>
            </div>
        </div>
    </header><!-- #masthead -->
