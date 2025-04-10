<?php get_header(); ?>

<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;

$args = array(
  'post_type'      => 'news', // カスタム投稿タイプ
  'posts_per_page' => 10, // 1ページに表示する投稿数
  'orderby'        => 'date', // 並び順（投稿日順）
  'order'          => 'DESC', // 降順
  'paged'          => $paged // ページネーション対応
);
$custom_query = new WP_Query($args);
?>

<main>
  <section class="subheader">
    <img class="header-circle-yellow" src="<?php echo get_template_directory_uri(); ?>/images/header/circle_yellow.svg" alt="">
    <img class="header-circle-big-green" src="<?php echo get_template_directory_uri(); ?>/images/header/circle_green.svg" alt="">
    <img class="header-circle-pink" src="<?php echo get_template_directory_uri(); ?>/images/header/circle_pink.svg" alt="">

    <div class="subheader-content post-title-content">
      <div class="subheader-content-title">
        <div class="post-sub-title">News</div>
        <h2>お知らせ</h2>
        <img class="" src="<?php echo get_template_directory_uri(); ?>/images/header/subheader-parts1.svg" alt="実里の外観画像">
      </div>
    </div>

  </section>

  <div class="layerbg-beige ">
    <section class="rounded-bg white-bg post-directory">
      <div class="content-width-medium single-post-wrap">
        <div class="article-container-news">
          <?php if ($custom_query->have_posts()) : ?>
            <?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
              <article class="news-all-content">
                <a href="<?php the_permalink(); ?>">
                  <time data-="<?php echo get_the_date('Y.m.d'); ?>" class="blog-date"><?php echo get_the_date('Y.m.d'); ?></time>
                  <h2><span><?php the_title(); ?></span><img src="<?php echo get_template_directory_uri(); ?>/images/common/red-arrow-circle.svg" alt=""></h2>
                </a>
              </article>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); // クエリをリセット 
            ?>
          <?php else : ?>
            <p>投稿がありません。</p>
          <?php endif; ?>

          <div class="pagination news-pagination">
            <?php
            echo paginate_links(array(
              'total'        => $custom_query->max_num_pages,
              'current'      => max(1, get_query_var('paged')),
              'mid_size'     => 1, // 現在のページの前後に1つずつ表示
              'end_size'     => 1, // 最初と最後のページを1つずつ表示
              'prev_text'    => '<img src="' . get_template_directory_uri() . '/images/common/left-arrow-red.svg" alt="前へ">',
              'next_text'    => '<img src="' . get_template_directory_uri() . '/images/common/right-arrow-red-2.svg" alt="次へ">',
            ));

            ?>
          </div>
        </div>
      </div>
    </section>
  </div>

</main>

<?php get_footer(); ?>