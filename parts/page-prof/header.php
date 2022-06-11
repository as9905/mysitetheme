<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="http://spiraea-drop.sunnyday.jp/"/>
    <meta property="og:type" content="website">
    <meta property="og:title" content="Kayo Osawa's web site"/>
    <meta property="og:description" content="Webサイト制作の学習をしている者のポートフォリオサイトです。"/>
    <meta property="og:image" content="http://spiraea-drop.sunnyday.jp/img/main-img.png"/>
    <meta name="twitter:card" content="summary_large_image">
    <title>kayo Osawa web site</title>
    <script>
        (function (d) {
            var config = {
                kitId: 'tlv1tut',
                scriptTimeout: 3000,
                async: true
            },
                h = d.documentElement, t = setTimeout(function () { h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive"; }, config.scriptTimeout), tk = d.createElement("script"), f = false, s = d.getElementsByTagName("script")[0], a; h.className += " wf-loading"; tk.src = 'https://use.typekit.net/' + config.kitId + '.js'; tk.async = true; tk.onload = tk.onreadystatechange = function () { a = this.readyState; if (f || a && a != "complete" && a != "loaded") return; f = true; clearTimeout(t); try { Typekit.load(config) } catch (e) { } }; s.parentNode.insertBefore(tk, s)
        })(document);
    </script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-prof/ress.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-prof/index_sp.css" media="screen and (max-width:590px)">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-prof/index.css" media="screen and (min-width:591px)">
    <?php wp_head(); ?>