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

function theme_enqueue_styles() {
  // 自動で読み込まれる style.css を無効化
  wp_dequeue_style('minori-hohoemi-style');
  wp_deregister_style('minori-hohoemi-style');

  // リセットCSSを読み込む
  wp_enqueue_style('reset-style', 'https://unpkg.com/ress@4.0.0/dist/ress.min.css');

  // style.min.css を読み込む（ファイルの更新日時をバージョンにしてキャッシュ対策）
  wp_enqueue_style(
    'main-style',
    get_template_directory_uri() . '/css/style.css',
    array('reset-style'),
    filemtime(get_template_directory() . '/css/style.css')
  );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles', 20);


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