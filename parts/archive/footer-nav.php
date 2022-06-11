<footer class="footer">
            <div class="footer-inner">
            <?php
                //メニューIDを取得する
                    $menu_name = 'global_nav';
                    $locations = get_nav_menu_locations();
                    $menu = wp_get_nav_menu_object($locations[$menu_name]);

                    $menu_items = wp_get_nav_menu_items($menu->term_id);
                ?>
                <nav class="footer-nav">
                    <ul class="footer-nav__list">
                    <?php foreach ($menu_items as $item): ?>
                        <li class="footer-nav__item"><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
                        <!-- /.footer-nav__item -->
                        <?php endforeach; ?>
                    </ul><!-- /.footer-nav__list -->
                </nav><!-- /.footer-nav -->
                <p class="footer-copyright">©2021 kayo oosawa</p><!-- /.footer-coryright -->
            </div><!-- /.footer-inner -->
        </footer><!-- /.footer -->