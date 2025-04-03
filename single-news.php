<?php get_header(); ?>

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
      <div class="news-content-width news-detail-content">
        <div class="article-container">
          <article>
            <?php
            // 投稿のカテゴリーを取得
            $categories = get_the_category();
            $category_slugs = [];

            if (!empty($categories)) {
              foreach ($categories as $category) {
                $category_slugs[] = esc_html($category->slug);
              }
            }

            // カンマ区切りで表示
            $category_slugs_text = implode(', ', $category_slugs);
            ?>

            <article class="single-post single-news">
              <div class="">
                <div class="blog-category-data">
                  <p class="blog-date"><?php echo get_the_date('Y.m.d'); ?></p>
                </div>
                <h2><?php the_title(); ?></h2>
                <div class="post-content">
                  <?php the_content(); ?>
                </div>
              </div>
            </article>
            <a href="/news" class="back-to-blog">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/row.svg" alt="">
              <span>ブログ一覧へ戻る</span>
            </a>
          </article>
        </div>
      </div>


    </section>
  </div>



</main>

<?php get_footer(); ?>