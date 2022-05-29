<header class="header">
            <div class="header-menu">
                <a href="./index.html">
                    <h1 class="header-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/front-page/logo.png" alt="kayo's web site logo">
                    </h1><!-- /.header-logo -->
                </a>
                <?php
                //メニューIDを取得する
                    $menu_name = 'global_nav';
                    $locations = get_nav_menu_locations();
                    $menu = wp_get_nav_menu_object($locations[$menu_name]);

                    $menu_items = wp_get_nav_menu_items($menu->term_id);
                ?>
                <nav class="header-nav">
                    <ul class="header-nav__list">
                        <?php foreach ($menu_items as $item): ?>
                        <li class="header-nav__item"><a href="<?php echo esc_attr($item->url); ?>"><?php echo esc_html($item->title); ?></a></li>
                        <!-- /.header-nav__item -->
                       <?php endforeach; ?>
                    </ul><!-- /.header-nav__list -->
                </nav><!-- /.header-nav -->
            </div><!-- /.header-menu -->
        </header><!-- /.header -->