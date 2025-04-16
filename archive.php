<?php get_header(); ?>

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
          if (have_posts()) :
            while (have_posts()) : the_post(); ?>
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
              'mid_size'  => 2,
              'end_size'  => 1,
              'prev_text' => '<img src="' . get_template_directory_uri() . '/images/common/left-arrow-red.svg" alt="前へ">',
              'next_text' => '<img src="' .  get_template_directory_uri() . '/images/common/right-arrow-red-2.svg" alt="次へ">',
              'screen_reader_text' => 'ページナビゲーション'
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
