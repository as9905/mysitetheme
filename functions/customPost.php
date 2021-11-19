<?php
    add_action('init','custom_post_type' );
    function custom_post_type(){
        register_post_type('cafe_product',     //カスタム投稿タイプのスラッグの指定
            array(
                'labels' => array(
                    'name' => __('カフェ商品一覧'),   //管理画面上に表示される投稿タイプ名
                    'singular_name' => __('カフェ商品リスト'),  //カスタム投稿の識別名
                    'add_new' => _x('新規追加','新規投稿'), //新規追加のラベル
                    'add_new_item' => __('新規追加')    //新規項目追加のラベル
                ),
                'description' => 'ディスクリプション',  //ディスクリプション
                'public' => true,   //投稿タイプを公開する
                'has_archive' => true,  //アーカイブを有効にする
                'hierarchical' => false,    //ページ階層の指定
                'menu_positon' => 5,
                'supports' => array('title','editor',
                                    'thumbnail','custom-fields',
                                    'excerpt','author',
                                    'trackback','comments',
                                    'revisions','page-attributes'
                                    ) //サポートの設定
            ));
        }


        function create_cafe_product_fields()
{
    add_meta_box(
        'banner_setting', //編集画面セクションのHTML ID
        'カフェ商品カスタムフィールド', //編集画面セクションのタイトル
        'insert_cafe_product_fields', //編集画面セクションにHTML出力する関数
        'cafe_product', //投稿タイプ名(postにすると、デフォルトである投稿に追加)
        'normal' //編集画面セクションが表示される部分
    );
}

add_action('admin_menu', 'create_cafe_product_fields');


function insert_cafe_product_fields(){
    global $post;
    echo '価格:<input type="text" name="price" value="'.esc_attr(get_post_meta($post->ID, 'price', true)).'">';
}

function save_cafe_product_fields( $post_id ) {
    if (!empty($_POST['price'])) {
        update_post_meta($post_id, 'price', $_POST['price']);
    } else {
        delete_post_meta($post_id, 'price');
    }
}

add_action('save_post', 'save_cafe_product_fields');