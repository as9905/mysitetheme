<header class="header">
            <div class="header-menu">
                <a href="./index.html">
                    <h1 class="header-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/front-page/logo.png" alt="kayo's web site logo">
                    </h1><!-- /.header-logo -->
                </a>
                <?php
                    $menu_name = 'global_nav';
                    $locations = get_nav_menu_locations();
                    $menu = wp_get_nav_menu_object($locations[$menu_name]);
                    var_dump($menu);
                ?>
                <nav class="header-nav">
                    <ul class="header-nav__list">
                        <li class="header-nav__item header-nav__item--start"><a href="#about">当サイトについて</a></li>
                        <!-- /.header-nav__item /.header-nav__item--start -->
                        <li class="header-nav__item"><a href="#profile">自己紹介</a></li><!-- /.header-nav__item -->
                        <li class="header-nav__item"><a href="#gallery">作品</a></li><!-- /.header-nav__item -->
                        <li class="header-nav__item"><a href="#contact">お問合せ</a></li><!-- /.header-nav__item -->
                        <li class="header-nav__item"><a href="#sns">SNS</a></li><!-- /.header-nav__item -->
                    </ul><!-- /.header-nav__list -->
                </nav><!-- /.header-nav -->
            </div><!-- /.header-menu -->
        </header><!-- /.header -->