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

    <header id="masthead" class="site-header glass-header sticky-header">
        <div class="header-container">
            <div class="site-branding">
                <?php
                if ( has_custom_logo() ) :
                    the_custom_logo();
                else :
                    ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php endif; ?>
            </div>

            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
            </button>

            <nav id="site-navigation" class="main-navigation">
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
            </nav>

            <div class="header-actions">
                <div class="region-selector">
                    <select id="region-select" class="glass-select">
                        <option value="">Sélectionnez votre zone</option>
                        <?php
                        $regions = get_terms( array(
                            'taxonomy'   => 'region',
                            'hide_empty' => false,
                        ) );
                        if ( ! empty( $regions ) && ! is_wp_error( $regions ) ) {
                            foreach ( $regions as $region ) {
                                echo '<option value="' . esc_attr( $region->slug ) . '">' . esc_html( $region->name ) . '</option>';
                            }
                        } else {
                            // Fallback static options if DB is empty
                            ?>
                            <option value="hexagone">Hexagone</option>
                            <option value="guadeloupe">Guadeloupe</option>
                            <option value="martinique">Martinique</option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <a href="#" class="btn-neon outline">Mon compte</a>
            </div>
        </div>
    </header>
