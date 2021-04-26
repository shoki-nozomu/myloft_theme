<?php
// 投稿画面でアイキャッチ画像を設定できるようにする
function custom_theme_setup()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'custom_theme_setup');
