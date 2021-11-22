<?php
    add_action('after_setup_theme',function(){
        
        //グーテンベルクカスタマイズをテーマで有効にする
        add_theme_support('wp-block-style');
    });