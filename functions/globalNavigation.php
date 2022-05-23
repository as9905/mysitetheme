<?php
    add_action('init', function(){
        //ナビゲーションメニュー追加
        register_nav_menus([
            'gloabal_navi' => 'グローバルナビゲーション'
        ]);
    });