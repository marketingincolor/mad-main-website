<?php
// Globals
$theme_slug = sanitize_title( wp_get_theme() );
$theme_mods = get_theme_mods();


/**
 * Theme customizer
 */
function madico_theme_customizer( $wp_customize ) {

    global $theme_slug;

    //
    // SECTION: Header
    $wp_customize->add_section( "{$theme_slug}_header_section" , array(
        'title'       => __( 'Header', $theme_slug ),
        'priority'    => 30,
        'description' => 'Control aspects of the header region.',
    ) );

    // Logo
    $name = 'logo';
    $wp_customize->add_setting( "{$theme_slug}_{$name}" );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, "{$theme_slug}_{$name}", array(
        'label'     => __( ucwords( $name ), $theme_slug ),
        'section'   => "{$theme_slug}_header_section",
        'settings'  => "{$theme_slug}_{$name}",
    ) ) );
}
add_action( 'customize_register', 'madico_theme_customizer' );


/**
 * Get Theme Logo
 *
 * Get the logo from theme customizer if it exists, otherwise
 * fall back to the site name & tagline.
 */
function madico_display_logo() {

    global $theme_slug, $theme_mods;

    $logo = ( ! empty( $theme_mods["{$theme_slug}_logo"] ) ) ? get_theme_mod( $theme_slug . "_logo" ) : get_stylesheet_directory_uri() . '/images/madico-logo-trans.png';
    $site_name = esc_attr( get_bloginfo( 'name', 'display' ) );
    ?>
    <div class="site-logo">
    	<div class="cell">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo $site_name; ?>" rel="home">
				<img src="<?php echo esc_url( $logo ); ?>" alt="<?php echo $site_name; ?>">
		    </a>
	    </div>
	</div>
    <?php
}