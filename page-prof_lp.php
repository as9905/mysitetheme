<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php get_template_part('/parts/page-prof_lp/header'); ?>
</head>
<body>
    <?php get_template_part('/parts/page-prof_lp/header-nav'); ?>
    <section class="about" id="about">
        <div class="about-inner">
            <h2 class="about-title">About</h2><!-- /.about-title -->
            <div class="about-cont">
                <figure class="about-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/page-prof_lp/about1.jpg" alt="">
                </figure><!-- /.about-img -->
                <div class="about-prof">
                    <h3 class="about-name">KAKERU MIYAUCHI</h3><!-- /.about-name -->
                    <p class="about-text">
                        テキストテキストテキストテキストテキストテキストテキスト
テキストテキストテキストテキストテキストテキストテキスト
テキストテキストテキストテキストテキストテキストテキスト
                    </p><!-- /.about-text -->
                </div><!-- /.about-prof -->
            </div><!-- /.about-cont -->
        </div><!-- /.about-inner -->
    </section><!-- /.about /#about -->
    <section class="bicycle" id="bicycle">
        <div class="bicycle-inner">
            <h2 class="bicycle-title">Bicycle</h2><!-- /.bicycle-title -->
            <ul class="bicycle-list">
                <li class="bicycle-item bicycle-item__start">
                   <div class="bicycle-item__inner">
                       <figure class="bicycle-item__img">
                           <img src="<?php echo get_template_directory_uri(); ?>/img/page-prof_lp/bicycle1-1.jpg" alt="自転車画像1">
                       </figure><!-- /.bicycle-item__img -->
                       <div class="bicycle-item__txtwrapper">
                           <h3 class="bicycle-item__title">タイトルタイトル</h3><!-- /.bicycle-item__title -->
                           <p class="bicycle-item__txt">テキストテキストテキスト</p><!-- /.bicycle-item__txt -->
                       </div><!-- /.bicycle-item__txtwrapper -->
                   </div><!-- /.bicycle-item__inner --> 
                </li><!-- /.bicycle-item /.bicycle-item__start -->
                <li class="bicycle-item">
                    <div class="bicycle-item__inner">
                        <figure class="bicycle-item__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/page-prof_lp/bicycle2-1.jpg" alt="自転車画像1">
                        </figure><!-- /.bicycle-item__img -->
                        <div class="bicycle-item__txtwrapper">
                            <h3 class="bicycle-item__title">タイトルタイトル</h3><!-- /.bicycle-item__title -->
                            <p class="bicycle-item__txt">テキストテキストテキスト</p><!-- /.bicycle-item__txt -->
                        </div><!-- /.bicycle-item__txtwrapper -->
                    </div><!-- /.bicycle-item__inner -->
                </li><!-- /.bicycle-item /#bicycle -->
                <li class="bicycle-item">
                    <div class="bicycle-item__inner">
                        <figure class="bicycle-item__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/page-prof_lp/bicycle3-1.jpg" alt="自転車画像1">
                        </figure><!-- /.bicycle-item__img -->
                        <div class="bicycle-item__txtwrapper">
                            <h3 class="bicycle-item__title">タイトルタイトル</h3><!-- /.bicycle-item__title -->
                            <p class="bicycle-item__txt">テキストテキストテキスト</p><!-- /.bicycle-item__txt -->
                        </div><!-- /.bicycle-item__txtwrapper -->
                    </div><!-- /.bicycle-item__inner -->
                </li><!-- /.bicycle-item -->
            </ul><!-- /.bicycle-list -->
        </div><!-- /.bicycle-inner -->
    </section><!-- /.bicycle -->
    <?php get_template_part('parts/page-prof_lp/footer'); ?>
</body>
</html>