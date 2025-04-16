<?php get_header(); ?>

<?php $paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
  'post_type'      => 'post',
  'posts_per_page' => 10,
  'paged'          => $paged
);
$query = new WP_Query($args);
?>

<main class="fadein-up delay-4 delay-wait-5">
  <section class="subheader">
    <img class="header-circle-yellow" src="<?php echo get_template_directory_uri(); ?>/images/header/circle_yellow.svg" alt="">
    <img class="header-circle-big-green" src="<?php echo get_template_directory_uri(); ?>/images/header/circle_green.svg" alt="">
    <img class="header-circle-pink" src="<?php echo get_template_directory_uri(); ?>/images/header/circle_pink.svg" alt="">

    <div class="subheader-content post-title-content">
      <div class="subheader-content-title fadein-up delay-4 delay-wait-5">
        <div class="post-sub-title">blog</div>
        <h2>実里のひだまり日記</h2>
        <img class="" src="<?php echo get_template_directory_uri(); ?>/images/header/subheader-parts1.svg" alt="実里の外観画像">
      </div>
    </div>

  </section>

  <div class="layerbg-beige ">
    <section class="rounded-bg white-bg post-directory ">
      <div class="content-width-medium blog-content-wrap">
        <div class="article-container">
          <?php
          if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
              <a class="blog-link" href="<?php the_permalink(); ?>">

                <div class="blog-item">
                  <!-- アイキャッチ画像 -->
                  <div class="blog-thumbnail">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(); ?>
                    <?php else : ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/default-thumbnail.jpg" alt="No Image">
                    <?php endif; ?>
                  </div>
                  <!-- ブログ情報 -->
                  <div class="blog-content">
                    <div class="blog-category-data">
                      <div class="blog-category">
                        <?php
                        $categories = get_the_category();
                        if (!empty($categories)) {
                          foreach ($categories as $category) {
                            // スラッグの取得（未設定なら `sanitize_title()` で変換）
                            $category_slug = !empty($category->slug) ? esc_attr($category->slug) : sanitize_title($category->name);

                            echo '<span class="category-' . $category_slug . '">' . esc_html($category->name) . '</span> ';
                          }
                        }
                        ?>
                      </div>
                      <p class="blog-date"><?php echo get_the_date('Y.m.d'); ?></p>
                    </div>
                    <h2 class="blog-title"><?php the_title(); ?></h2>
                    <p class="blog-excerpt">
                      <?php echo wp_trim_words(get_the_excerpt(), 55, '...'); ?>
                    </p>
                    <span class="read-more-btn">記事を読む</span>
                  </div>
                </div>
              </a>
          <?php endwhile;
            the_posts_pagination(array(
              'mid_size'  => 2, // 現在のページの前後に表示するページ数（例：1 2 3）
              'end_size'  => 1, // 最初と最後のページを常に表示（例：最初、最後）
              'prev_text' => '<img src="' . get_template_directory_uri() . '/images/common/left-arrow-red.svg" alt="前へ">',
              'next_text' => '<img src="' .  get_template_directory_uri() . '/images/common/right-arrow-red-2.svg" alt="次へ">',
              'screen_reader_text' => 'ページナビゲーション' // スクリーンリーダー向けテキスト
            ));
          endif;
          ?>
        </div>
        <aside class="sidebar-content">
          <?php get_sidebar(); ?>
        </aside>
      </div>


    </section>
  </div>


</main>

<?php get_footer(); ?>