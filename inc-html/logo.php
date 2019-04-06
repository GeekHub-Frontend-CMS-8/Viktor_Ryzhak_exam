<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package exam
 */

?>


<div class="site-branding">
    <?php
    the_custom_logo();
    if ( is_front_page() && is_home() ) :
        ?>
        <h1 class="site-title logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    <?php
    else :
        ?>
        <p class="site-title logo"><a class="logo__title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
    <?php
    endif;
    $akad_description = get_bloginfo( 'description', 'display' );
    if ( $akad_description || is_customize_preview() ) :
        ?>
        <p class="site-description"><?php echo $akad_description; /* WPCS: xss ok. */ ?></p>
    <?php endif; ?>
</div><!-- .site-branding -->

