<?php
    /*
    Template Name: page-home
    */

get_header();
?>

    <section class="container">
        <div class="hero">
            <div class="hero__one">
                <div class="item-social  hero__one-type">
                    <a href="https://www.facebook.com/" class="item-social__icon">
                        <div class="item-social__text">
                            <i class="fab fa-facebook-square"></i>
                        </div>
                    </a>
                    <a href="https://www.instagram.com/" class="item-social__icon">
                        <div class="item-social__text">
                            <i class="fab fa-instagram"></i>
                        </div>
                    </a>
                    <a href="https://www.youtube.com/" class="item-social__icon">
                        <div class="item-social__text">
                            <i class="fab fa-youtube"></i>
                        </div>
                    </a>
                    <a href="https://twitter.com/" class="item-social__icon">
                        <div class="item-social__text">
                            <i class="fab fa-twitter"></i>
                        </div>
                    </a>
                </div>
                <a onclick="smoothScroll('portfolio')">
                    <div class="hero__one-content">
                        <p class="hero__one-content-text">
                            <?php echo get_theme_mod( 'zef_content_hero__general-go-to' ); ?>
                        </p>
                    </div>
                </a>
            </div>
            <div class="hero__two-background">
                <div class="hero__two-content">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <div  class="hero__two-content-icon">
                            <i class="fas fa-play"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="hero__three">
                <div class="hero__three">
                    <div class="hero__three-item">
                        <p class="hero__three-item-text">
                            01
                        </p>
                    </div>
                    <div class="hero__three-item">
                        <p class="hero__three-item-text">
                            02
                        </p>
                    </div>
                    <div class="hero__three-item">
                        <p class="hero__three-item-text">
                            03
                        </p>
                    </div>
                    <div class="hero__three-item">
                        <p class="hero__three-item-text">
                            04
                        </p>
                    </div>
                </div>

            </div>
            <div class="hero__content">
                <div class="hero__content-two">
                    <h2 class="hero__content-two-title">
                        <?php echo get_theme_mod( 'zef_content_hero__general-title' ); ?>
                    </h2>
                    <p class="hero__content-two-text">
                        <?php echo get_theme_mod( 'zef_content_hero__general-text' ); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio"class="portfolio">
        <div class="portfolio__content container">
            <div class="portfolio__content-one">
                <div class="item-portfolio">
                    <div  class="item-portfolio__icon">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <p class="item-portfolio__text">
                                Actor
                            </p>
                        </a>
                    </div>
                    <div  class="item-portfolio__icon">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <p class="item-portfolio__text">
                                Musician
                            </p>
                        </a>
                    </div>
                    <div  class="item-portfolio__icon">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <p class="item-portfolio__text">
                                Comedian
                            </p>
                        </a>
                    </div>
                    <div  class="item-portfolio__icon">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <p class="item-portfolio__text">
                                Model
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="portfolio__content-two container">
                <div class="item-persons">
                    <div class="posts-gride">
                        <div class="post-item">
                            <div class="item-persons__img">
                                <div class="item-persons__icon"></div>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="item-persons__item">
                                    <div class="item-persons__content">
                                        <h3 class="item-persons__content-title">
                                            Keith Ruiz
                                        </h3>
                                        <p class="item-persons__content-subtitle">
                                            Comedian
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="post-item">
                            <div class="item-persons__img">
                                <div class="item-persons__icon"></div>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="item-persons__item">
                                    <div class="item-persons__content">
                                        <h3 class="item-persons__content-title">
                                            Keith Ruiz
                                        </h3>
                                        <p class="item-persons__content-subtitle">
                                            Comedian
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div><div class="post-item">
                            <div class="item-persons__img">
                                <div class="item-persons__icon"></div>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="item-persons__item">
                                    <div class="item-persons__content">
                                        <h3 class="item-persons__content-title">
                                            Keith Ruiz
                                        </h3>
                                        <p class="item-persons__content-subtitle">
                                            Comedian
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="post-item">
                            <div class="item-persons__img">
                                <div class="item-persons__icon"></div>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="item-persons__item">
                                    <div class="item-persons__content">
                                        <h3 class="item-persons__content-title">
                                            Keith Ruiz
                                        </h3>
                                        <p class="item-persons__content-subtitle">
                                            Comedian
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="post-item">
                            <div class="item-persons__img">
                                <div class="item-persons__icon"></div>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="item-persons__item">
                                    <div class="item-persons__content">
                                        <h3 class="item-persons__content-title">
                                            Keith Ruiz
                                        </h3>
                                        <p class="item-persons__content-subtitle">
                                            Comedian
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="post-item">
                            <div class="item-persons__img">
                                <div class="item-persons__icon"></div>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="item-persons__item">
                                    <div class="item-persons__content">
                                        <h3 class="item-persons__content-title">
                                            Keith Ruiz
                                        </h3>
                                        <p class="item-persons__content-subtitle">
                                            Comedian
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="post-item">
                            <div class="item-persons__img">
                                <div class="item-persons__icon"></div>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="item-persons__item">
                                    <div class="item-persons__content">
                                        <h3 class="item-persons__content-title">
                                            Keith Ruiz
                                        </h3>
                                        <p class="item-persons__content-subtitle">
                                            Comedian
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="post-item">
                            <div class="item-persons__img">
                                <div class="item-persons__icon"></div>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="item-persons__item">
                                    <div class="item-persons__content">
                                        <h3 class="item-persons__content-title">
                                            Keith Ruiz
                                        </h3>
                                        <p class="item-persons__content-subtitle">
                                            Comedian
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio__content-three">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <p class="portfolio__content-three-text">
                        explore more
                    </p>
                </a>

            </div>
        </div>
    </section>



<?php
get_footer();
?>

