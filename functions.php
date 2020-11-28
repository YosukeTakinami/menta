<?php
/**
 * PHPのメモリー上限の書き換え
 */
ini_set('memory_limit', '256M');

/**
 * wp_head　不要タグの削除
 */
remove_action( 'wp_head', 'wp_generator' ); //WordPressのバージョン情報
remove_action( 'wp_head', 'rsd_link' ); //外部アプリケーションから情報を取得するタグ
remove_action( 'wp_head', 'wlwmanifest_link' ); //Windows Live Writer用のタグ
remove_action( 'wp_head', 'index_rel_link' ); //現在の文書に対する「索引」であることを示すタグ
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 ); //「?p=投稿ID」形式のデフォルトパーマリンクタグ

//「link rel=next」等のタグ
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

//フィード関連のタグ
remove_action( 'wp_head', 'feed_links', 2);
remove_action( 'wp_head', 'feed_links_extra', 3);

//絵文字関連タグ
remove_action( 'wp_head', 'print_emoji_detection_script', 7);
remove_action( 'admin_print_scripts', 'print_emoji_detection_script');
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles');
add_filter( 'emoji_svg_url', '__return_false' );

/**
 * add_theme_support
 */
add_action( 'after_setup_theme', function(){
  add_theme_support( 'title-tag' ); // tiltleタグの追加
  add_theme_support( 'post-thumbnails' ); //サムネイル機能の追加
  add_theme_support('menus'); // カスタムメニュー
  add_theme_support('widgets'); // ウィジェットの追加
});

/**
 * session_start
 */
add_action('init', function(){
    session_start();
});

// 記事の自動整形を無効化
remove_filter('the_content', 'wpautop');
// 抜粋の自動整形を無効化
remove_filter('the_excerpt', 'wpautop');
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );


/* 投稿アーカイブを有効にしてスラッグを指定する */
function post_has_archive( $args, $post_type ) {

    if ( 'post' == $post_type ) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'news'; // スラッグ名
    }
    return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );



function pagenation($pages = '', $range = 2){
    $showitems = ($range * 1)+1;
    global $paged;
    if(empty($paged)) $paged = 1;
    if($pages == ''){
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages){
            $pages = 1;
        }
    }
    if(1 != $pages){
        // 画像を使う時用に、テーマのパスを取得
        $img_pass = get_template_directory_uri();
        echo "<div class=\"m-pagenation\">";
        // 「1/2」表示 現在のページ数 / 総ページ数
        // echo "<div class=\"m-pagenation__result\">". $paged."/". $pages."</div>";
        // 「前へ」を表示
        if($paged > 1) echo "<div class=\"m-pagenation__prev\"><a href='".get_pagenum_link($paged - 1)."'>＜</a></div>";
        // ページ番号を出力
        echo "<ol class=\"m-pagenation__body\">\n";
        for ($i=1; $i <= $pages; $i++){
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
                echo ($paged == $i)? "<li class=\"-current\">".$i."</li>": // 現在のページの数字はリンク無し
                    "<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
            }
        }
        // [...] 表示
        // if(($paged + 4 ) < $pages){
        //     echo "<li class=\"notNumbering\">...</li>";
        //     echo "<li><a href='".get_pagenum_link($pages)."'>".$pages."</a></li>";
        // }
        echo "</ol>\n";
        // 「次へ」を表示
        if($paged < $pages) echo "<div class=\"m-pagenation__next\"><a href='".get_pagenum_link($paged + 1)."'>＞</a></div>";
        echo "</div>\n";
    }
}


