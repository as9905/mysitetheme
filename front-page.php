<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_template_part('parts/front-page/header'); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
        <div class="body-wrapper">
        <?php get_template_part('parts/front-page/header-nav'); ?>
        <div class="blog">
            <div class="blog-inner">
                <?php
                $args = array(
                    'posts_per_page' => 5 // 表示件数の指定
                );
                if (have_posts()) :
                ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="blog-post">
                            <a href="<?php the_permalink(); ?>">
                                <div class="blog-post__heading">
                                    <h2 class="blog-post__title"><?php the_title(); ?></h2><!-- /.post-title -->
                                    <p class="blog-post__date"><?php the_time(get_option('date_format')); ?></p>
                                </div>
                                <p class="blog-post__excerpt"><?php echo get_the_excerpt(); ?></p>
                            </a><!-- /. -->
                        </article>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>記事がありません</p>
                <?php endif; ?>
            </div><!-- /.blog-inner -->
            </div><!-- /.blog -->
        <?php get_template_part('parts/front-page/footer-nav'); ?>
    </div> <!-- /.body-wrapper -->
    <?php get_template_part('parts/front-page/footer'); ?>
</body>

</html>