<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_template_part('parts/single/header'); ?>

</head>

<body>
    <noscript>
        JavaScriptが無効です。JavaScriptを有効にして下さい。
    </noscript>
    <div class="body-wrapper">
        <?php get_template_part('parts/single/header-nav'); ?>
        <ul class="post-list">
            <?php
            $args = array(
                'posts_per_page' => 5 // 表示件数の指定
            );
            $posts = get_posts($args);
            foreach ($posts as $post) : // ループの開始
                setup_postdata($post); // 記事データの取得
            ?>
                <li>
                    <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </li>
            <?php
            endforeach; // ループの終了
            wp_reset_postdata(); // 直前のクエリを復元する
            ?>
        </ul><!-- /.post-list -->
        <?php get_template_part('parts/single/footer'); ?>
        <!-- </div> -->