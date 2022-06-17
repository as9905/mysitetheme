<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_template_part('parts/front-page/header'); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
        <div class="body-wrapper">
        <?php get_template_part('parts/front-page/header-nav'); ?>
        
        <main class="main">
        </main><!-- /.main -->
        <section class="about" id="about">
            <div class="about-inner">
                <h2 class="about-title">当サイトについて</h2><!-- /.about-title -->
                <div class="about-cont">
                    <p class="about-sentence">
                        サイトをご覧いただきありがとうございます。<br />
                        当サイトは、自身で制作した作品の記録です。</p>
                    <p class="about-sentence">当Webサイトで使用している言語<br />
                        HTML/CSS（Sass）/JavaScript</p>
                    <p class="about-sentence">学習した言語<br />
                        HTML/CSS（Sass）/JavaScript/PHP</p>
                    <p class="about-sentence">
                        制作に使用したアプリケーション<br />
                        Visual Studio Code/Figma/Prepross/Photoshop</p>
                    <p class="about-sentence about-sentence--end">
                        ※注意※<br />
                        当サイトはJavaScriptを使用しています。JavaScriptの設定をオンにしてください。<br />
                        仮公開のため、一部表示が崩れています。ご了承下さい。
                    </p>
                </div><!-- /.about-cont -->
            </div><!-- /.about-inner -->
        </section><!-- /.about -->
        <section class="profile" id="profile">
            <div class="profile-inner">
                <h2 class="profile-title">自己紹介</h2><!-- /.profile-title -->
                <h3 class="profile-name">Kayo Osawa</h3><!-- /.profile-name -->
                <div class="profile-cont">
                    <p class="profile-sentence">はじめまして、大澤　佳世（おおさわ　かよ）と申します。<br />
                        20代の重度身体障害者です。<br />
                        養護学校（特別支援学校）を卒業後、事務のお仕事に携わりましたが、体調を崩したため退職しました。<br />
                        その後、しばらく療養。
                    </p>
                    <p class="profile-sentence profile-sentence--end">
                        現在は、就労移行支援事業所にてWebプログラミングや、Officeのスキルを学びながら就活をしています。<br />
                    </p>
                </div><!-- /.profile-cont -->
            </div><!-- /.profile-inner -->
        </section><!-- /.profile -->
        <section class="gallery" id="gallery">
            <div class="gallery-inner">
                <h2 class="gallery-title">制作した作品</h2><!-- /.gallery-title -->
                <div class="gallery-txt">
                    <p>タイトル・説明・制作開始月・レスポンシブ対応状況を各アイテムの画像下に記載しています。</p>
                </div><!-- /.gallery-txt -->
                <ul class="gallery-list">
                    <li class="gallery-item">
                        <a href="./animal">
                            <div class="gallery-item__inner">
                                <figure class="gallery-item__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/front-page/item1.png" alt="架空のペットショップサイト画像">
                                </figure><!-- /.gallery-item__img -->
                                <div class="gallery-item__caption">
                                    <p class="gallery-item__title">架空のペットショップサイト</p><!-- /.gallery-item__title -->
                                    <p class="gallery-item__txt">USAGI DESIGN-emi-様が配布されているpsdファイルを元にコーディングしました。</p>
                                    <!-- /.gallery-item__txt -->
                                    <p class="gallery-item__date">2021-03制作</p>
                                    <p class="gallery-type">PC</p>
                                </div><!-- /.gallery-item__caption -->
                            </div><!-- /.gallery-item__inner -->
                        </a>
                    </li><!-- /.gallery-item -->
                    <li class="gallery-item">
                        <a href="./cafe">
                            <div class="gallery-item__inner">
                                <figure class="gallery-item__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/front-page/item2.png" alt="架空のカフェサイト画像">
                                </figure><!-- /.gallery-item__img -->
                                <div class="gallery-item__caption">
                                    <p class="gallery-item__title">架空のカフェサイト</p><!-- /.gallery-item__title -->
                                    <p class="gallery-item__txt">USAGI DESIGN-emi-様が配布されているpsdファイルを元にコーディングしました。</p>
                                    <!-- /.gallery-item__txt -->
                                    <p class="gallery-item__date">2021-05制作</p>
                                    <p class="gallery-type">PC・スマホ</p>
                                </div><!-- /.gallery-item__caption -->
                            </div><!-- /.gallery-item__inner -->
                        </a>
                    </li><!-- /.gallery-item -->
                    <li class="gallery-item">
                        <a href="./prof_lp">
                            <div class="gallery-item__inner">
                                <figure class="gallery-item__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/front-page/item3.png" alt="架空のプロフィールサイト画像">
                                </figure><!-- /.gallery-item__img -->
                                <div class="gallery-item__caption">
                                    <p class="gallery-item__title">架空のプロフィールサイト</p><!-- /.gallery-item__title -->
                                    <p class="gallery-item__txt">コーディング高速化を目標にCodeStep様の練習課題を元にコーディングしました。</p>
                                    <!-- /.gallery-item__txt -->
                                    <p class="gallery-item__date">2021-08制作</p>
                                    <p class="gallery-type">PC・スマホ</p>
                                </div><!-- /.gallery-item__caption -->
                            </div><!-- /.gallery-item__inner -->
                    </li><!-- /.gallery-item -->
                </ul><!-- /.gallery-list -->
            </div><!-- /.gallery-inner -->
            </a>
        </section><!-- /.gallery -->
        <section class="contact" id="contact">
            <div class="contact-inner">
                <h2 class="contact-title">お問合せ</h2><!-- /.contact-title -->
                <div class="contact-cont">
                    <p class="contact-txt">
                        お問い合わせは<a href="https://forms.gle/CbiQwahZYbauRMSD8">こちらのGoogleフォーム</a>からお願いいたします。<br />
                        近日中に折り返しご連絡いたします。<br />
                        なお、お問い合わせの際に入力された個人情報は折り返しの連絡のみに使用させていただきます。
                    </p><!-- /.contact-txt -->
                </div><!-- /.contact-cont -->
            </div><!-- /.contact-inner -->
        </section><!-- /.contact -->
        <div class="sns" id="sns">
            <div class="sns-inner">
                <h2 class="sns-title">SNS</h2><!-- /.sns-title -->
                <div class="sns-cont">
                    <p class="sns-txt">
                        準備中です。
                    </p><!-- /.sns-txt -->
                </div><!-- /.sns-cont -->
            </div><!-- /.sns-inner -->
        </div><!-- /.sns -->
        <?php get_template_part('parts/front-page/footer-nav'); ?>
    </div>
    <?php get_template_part('parts/front-page/footer'); ?>
</body>

</html>