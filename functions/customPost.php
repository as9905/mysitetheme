<?php
    add_action('init','custom_post_type' );
    function custom_post_type(){
        register_post_type('news',     //カスタム投稿タイプのスラッグの指定
            array(
                'labels' => array(
                    'name' => __('お知らせ'),   //管理画面上に表示される投稿タイプ名
                    'singular_name' => __('お知らせ'),  //カスタム投稿の識別名
                    'add_new' => _x('新規投稿','お知らせ'), //新規追加のラベル
                    'add_new_item' => __('新規投稿')    //新規項目追加のラベル
                ),
                'description' => 'ディスクリプション',  //ディスクリプション
                'public' => true,   //投稿タイプを公開する
                'has_archive' => true,  //アーカイブを有効にする
                'hierarchical' => false,    //ページ階層の指定
                'menu_positon' => 5,
                'sports' => array('title','editor','thumbnail','custom-fields','excerpt','author','trackback','comments','revisions','page-attributes') //サポートの設定
            ));
        }