<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package exam
 */

?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php get_the_title(); ?></title>

    <?php wp_head(); ?>
</head>
<body>
    <header id="header" class="header">
        <div class="container">
            <div class="header__content">
                <div class="header__content-item">
                    <nav class="navbar  navbar-light d-flex">
                        <div class="nav">
                            <div>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                            <?php
                            wp_nav_menu( array(
                                'menu_class'      => 'nav__menu navbar-nav',          // (string) class самого меню (ul тега)
                                'container'       => 'div',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
                                'container_class' => 'collapse navbar-collapse justify-content-end',              // (string) class контейнера (div тега)
                                'container_id'    => 'navbarNav',              // (string) class контейнера (div тега)
                                'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
                                'depth'           => 0
                            ) );
                            ?>
                        </div>
                    </nav>
                </div>
                <div class="header__content-item">
                    <?php require "inc-html/logo.php"; ?>
                </div>
                <div class="header__content-item">
                    <div class="item-social__text">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>