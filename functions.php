<?php
// start ワードプレスツールバー一時的に非表示
add_filter('show_admin_bar', '__return_false');
// end ワードプレスツールバー一時的に非表示

// アイキャッチ設定
function my_theme_setup()
{
  // すべての投稿タイプに適用
  add_theme_support('post-thumbnails');

  // 必要に応じて特定の投稿タイプに適用
  add_theme_support('post-thumbnails', array('post', 'page', 'custom_post_type'));
}
add_action('after_setup_theme', 'my_theme_setup');


function theme_enqueue_styles()
{
  // リセットCSSを読み込む
  wp_enqueue_style('reset-style', 'https://unpkg.com/ress@4.0.0/dist/ress.min.css');
  // メインのCSSを読み込む（リセットCSSの後に適用）
  wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css', array('reset-style'));
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


// function my_theme_enqueue_scripts()
// {
//   // GSAPのCDNを登録
//   wp_enqueue_script(
//     'gsap-cdn',
//     'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js',
//     array(),
//     null,
//     true
//   );

//   // カスタムJSファイルを登録（GSAPの後に読み込む）
//   wp_enqueue_script(
//     'custom-script',
//     get_template_directory_uri() . '/js/script.js',
//     array('gsap-cdn'), // GSAPに依存
//     null,
//     true
//   );
// }
// add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

function my_theme_enqueue_scripts()
{
  // SwiperのCSSを登録
  wp_enqueue_style(
    'swiper-style',
    'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css'
  );

  // SwiperのJSを登録
  wp_enqueue_script(
    'swiper-js',
    'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
    array(),
    null,
    true
  );

  // GSAPのCDNを登録
  wp_enqueue_script(
    'gsap-cdn',
    'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js',
    array(),
    null,
    true
  );

  // カスタムJSファイルを登録（GSAPとSwiperの後に読み込む）
  wp_enqueue_script(
    'custom-script',
    get_template_directory_uri() . '/js/script.js',
    array('gsap-cdn', 'swiper-js'), // 依存関係にSwiperとGSAPを指定
    null,
    true
  );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');





function create_custom_post_types()
{
  // ブログはデフォルト投稿なので不要

  // お知らせカスタム投稿タイプ
  register_post_type(
    'news',
    array(
      'labels' => array(
        'name' => 'お知らせ',
        'singular_name' => 'お知らせ'
      ),
      'public' => true,
      'has_archive' => true, // 一覧ページを作る
      'menu_position' => 5,
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
      'rewrite' => array('slug' => 'news')
    )
  );
}
add_action('init', 'create_custom_post_types');


class Custom_Walker_Category extends Walker_Category
{
  function start_el(&$output, $category, $depth = 0, $args = array(), $id = 0)
  {
    $slug = $category->slug; // スラッグを取得
    $class = 'category-item category-circle-' . esc_attr($slug); // カスタムクラスを作成

    $output .= '<li class="' . $class . '">';
    $output .= '<a href="' . esc_url(get_term_link($category)) . '">' . esc_html($category->name) . '</a>';
    $output .= '</li>';
  }
}


//start カスタム投稿を取得
function create_custom_post_type()
{
  register_post_type(
    'custom_post', // カスタム投稿のスラッグ
    array(
      'labels'      => array(
        'name'          => __('カスタム投稿'),
        'singular_name' => __('カスタム投稿'),
      ),
      'public'      => true,
      'has_archive' => true,
      'supports'    => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
      'menu_position' => 5,
      'menu_icon'   => 'dashicons-admin-post',
    )
  );
}
add_action('init', 'create_custom_post_type');

//end カスタム投稿を取得


// start ページトップナビゲーションメニューを有効化
//header-navigation.phpを読み込む
// function my_theme_register_menus()
// {
//   register_nav_menus(
//     array(
//       'header-menu' => __('Header Menu', 'theme_text_domain')
//     )
//   );
// }
// add_action('init', 'my_theme_register_menus');
// end ページトップナビゲーションメニューを有効化



// function add_file_types_to_uploads($file_types)
// {

//     $new_filetypes = array();
//     $new_filetypes['svg'] = 'image / svg + xml';
//     $file_types = array_merge($file_types, $new_filetypes);

//     return $file_types;
// }
// add_action('upload_mimes', 'add_file_types_to_uploads');


// function custom_theme_setup()
// {
//     //head内にフィードリンクを出力
//     add_theme_support('automatic-feed-links');

//     //タイトルタグを動的に出力
//     add_theme_support('title-tag');

//     //ブロックエディター用のCSSを有効化
//     add_theme_support('wp-block-styles');

//     //埋め込みコンテンツをレスポンシブ対応に
//     add_theme_support('responsive-embeds');
// }
// add_action('after_setup_theme', 'custom_theme_setup');


// function tb_baseball_scripts()
// {
//     //reset.cssを先に読み込むようにした

//     wp_enqueue_style(
//         '', // ハンドル名
//         get_template_directory_uri() . '/css/style.min.css', // ファイルのパス
//         array('reset', 'second', 'third'), // 依存関係
//         '2.0', // バージョン指定
//         'all' // メディアタイプ
//     );
// }
// add_action('wp_enqueue_scripts', 'tb_baseball_scripts');


// //アイキャッチ画像を有効化
// add_theme_support('post-thumbnails');
// set_post_thumbnail_size(231, 177, false);


// // アップロードファイルまでのURL定義
// $upload_dir = wp_upload_dir();
// // echo $upload_dir['baseurl'];


// // 投稿のアーカイブページを作成する
// function post_has_archive($args, $post_type)
// {
//     if ('post' == $post_type) {
//         $args['rewrite'] = true; // リライトを有効にする
//         $args['has_archive'] = 'blog'; // 任意のスラッグ名
//     }
//     return $args;
// }
// add_filter('register_post_type_args', 'post_has_archive', 10, 2);
