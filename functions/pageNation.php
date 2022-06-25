<?php
    function my_pre_get_posts($query){
        if(is_admin() || ! $query -> is_main_query()) return;

        if($query -> is_archive() ){
            $query -> set('posts_per_page', 5);
            return;
        }
        if($query -> is_category()){
            $query -> set('posts_per_page', 5);
            return;
        }
    }
    add_action('pre_get_posts', 'my_pre_get_posts');