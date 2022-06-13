<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_template_part('parts/single/header'); ?>
    <style>
        .midashi{
            color: #fff;
            background-color: yellow;
            padding: 5px;
        }
    </style>
</head>

<body>
    <noscript>
        JavaScriptが無効です。JavaScriptを有効にして下さい。
    </noscript>
    <div class="body-wrapper">
        <?php get_template_part('parts/single/header-nav'); ?>
        <?php
                if(have_posts()):
                    while(have_posts()):the_post();
            ?>
        <article class="blog">
            <div class="blog-inner">
                <h1 class="blog-post__title"><?php the_title(); ?></h1><!-- /.blog-post__title -->
                <div class="blog-post__content">
                    <?php the_content(); ?>
                </div><!-- /.blog-post__content -->
            </div><!-- /.blog-inner -->
        </article><!-- /.blog -->
        <?php endwhile; endif; ?>
        <?php get_template_part('parts/single/footer-nav'); ?>
    </div><!-- /.body-wrapper -->
    <?php get_template_part('parts/archive/footer.php') ?>
</body>