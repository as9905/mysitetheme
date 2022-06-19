<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_template_part('parts/archive/header'); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
        <div class="body-wrapper">
        <?php get_template_part('parts/archive/header-nav'); ?>
        <div class="blog">
            <div class="blog-inner">
                <?php
                $args = array(
                    'posts_per_page' => 5 // 表示件数の指定
                );
                $posts = get_posts($args);
                foreach ($posts as $post) : // ループの開始
                    setup_postdata($post); // 記事データの取得
                ?>
                    <article class="blog-post">
                        <a href="<?php the_permalink(); ?>" class="blog-post__link"></a>
                        <div class="blog-post__heading">
                            <h2 class="blog-post__title"><?php the_title(); ?></h2>
                            <p class="blog-post__date"><?php the_time(get_option('date_format')); ?></p>
                        </div>
                        <p class="blog-post__excerpt"><?php echo get_the_excerpt(); ?></p>
                    </article><!-- /.blog-post -->
                <?php
                endforeach; // ループの終了
                wp_reset_postdata(); // 直前のクエリを復元する
                ?>
            </div><!-- /.blog-inner -->
        </div><!-- /.blog -->
        <?php get_template_part('parts/archive/footer-nav'); ?>
    </div> <!-- /.body-wrapper -->
    <?php get_template_part('parts/archive/footer.php') ?>
</body>