<?php get_header(); ?>

<main>
  <section class="main-about">
    <div class="main-side1"><img src="<?php echo get_template_directory_uri(); ?>/images/main/main-side1.png" alt="デイサービス 実里のサービス画像"></div>
    <div class="main-side2"><img src="<?php echo get_template_directory_uri(); ?>/images/main/main-side2.png" alt="デイサービス 実里のサービス画像"></div>
    <div class="main-about-content">
      <h2>
        笑顔と安心に包まれる
        <span class="main-about-quote">わが家</span>のように
      </h2>
      <p>
        人生は、ひとつひとつの「まいにち」の積み重ね。<br>
        実里は、その大切な「まいにち」を、笑顔とぬくもりで満たし、
        安心を届ける場所です。<br>
        <span class="main-about-strong">「みんながまあるくいられることが幸せだいね」</span>
        この想いを胸に、家庭的で温かな環境を大切にし、<br>
        一人ひとりに寄り添ったケアを心がけています。<br>
        実里で過ごす時間が、新しい幸せと安心につながりますように。
        私たち職員一同、福祉の心を込めてお手伝いします。
      </p>
      <a class="nav-btn medium-btn arrow-btn" href="/about">
        <span>実里について</span>
      </a>
    </div>
  </section>
  <section class="content-width-large main-service">
    <div class="main-service-content-left">
      <h2>サービス紹介</h2>
      <p>
        「実里」はわが家のような温かい施設です。赤城山麓の自然に囲まれ、安心して暮らせる住環境と笑顔を支えるケアを提供します。
      </p>
      <a class="nav-btn medium-btn arrow-btn" href="/service">
        <span>サービス紹介</span>
      </a>
    </div>

    <div class="main-service-content-right">
      <section class="main-service-content-left-item1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/main/service1.jpg" alt="住宅型有料老人ホーム 実里のサービス画像">
        <h3>住宅型有料老人ホーム 実里</h3>
        <p> 赤城山麓の自然に囲まれた住宅型有料老人ホームです。自立を重視した生活支援と季節の行事で、心豊かな毎日をお届けします。</p>
      </section>

      <section class="main-service-content-left-item2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/main/service2.jpg" alt="デイサービス 実里のサービス画像">
        <h3>デイサービス 実里</h3>
        <p>住み慣れた地域での暮らしを支える日帰りサービスです。送迎、食事、入浴に加え、個別ケアや楽しいレクリエーションを提供します。</p>
      </section>
      <a class="main-service-content-left-item3" href="">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/main/banner-sp.jpg" media="(max-width: 820px)"> <img src="<?php echo get_template_directory_uri(); ?>/images/main/banner-pc.jpg" alt="画像の説明">
        </picture>
      </a>
    </div>
  </section>
  <div class="rounded-bg beige-bg">
    <section class="content-width-large sns-section">
      <h2 class="">実里とほほえみSNS</h2>
      <p>「実里」「ほほえみ」の日常を積極発信中！</p>

      <div class="sns-blog-wrap">
        <section class="sns-blog-title">
          <h3><img src="<?php echo get_template_directory_uri(); ?>/images/common/blog.svg" alt=""><span>blog</span></h3>
          <p>日々の出来事から、私たちの想いや考えを文章でお届けします。</p>
          <a class="nav-btn medium-btn arrow-btn" href="/blog">
            <span>ブログ一覧へ</span></a>
        </section>

        <section class="sns-blog-section">

          <?php
          $args = array(
            'post_type'      => 'post', // 通常のブログ投稿を取得
            'posts_per_page' => 3,      // 表示する投稿数（適宜変更）
            'orderby'        => 'date', // 日付順
            'order'          => 'DESC'  // 新しい順
          );
          $blog_query = new WP_Query($args);

          if ($blog_query->have_posts()) :
            while ($blog_query->have_posts()) : $blog_query->the_post();
          ?>
              <article>
                <header>
                  <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) : ?>
                      <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>">
                    <?php else : ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/dummy/blog-image.jpg" alt="サムネイル">
                    <?php endif; ?>

                    <?php
                    // カテゴリー取得（最初の1つだけ）
                    $category = get_the_category();
                    if (!empty($category)) :
                    ?>
                      <span class="category-<?php echo $category[0]->slug; ?>"><?php echo esc_html($category[0]->name); ?></span>
                    <?php endif; ?>

                    <h4><?php the_title(); ?></h4>
                    <p>
                      <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                      <span>記事を読む <img src="<?php echo get_template_directory_uri(); ?>/images/common/right-arrow-red.svg" alt=""></span>
                    </p>
                  </a>
                </header>
              </article>
          <?php
            endwhile;
            wp_reset_postdata(); // クエリをリセット
          else :
            echo '<p>記事がありません。</p>';
          endif;
          ?>
        </section>
      </div>

      <section class="sns-section-detail">
        <div class="sns-section-detail-content">
          <h4><img src="<?php echo get_template_directory_uri(); ?>/images/common/instagram.svg" alt=""><span>Instagram</span></h4>
          <p>
            利用者様との笑顔の思い出や季節のイベントを写真でシェアしています。
          </p>
          <a href="" class="nav-btn medium-btn sns-button sns-button-instagram">
            <span>インスタグラムはこちら</span>
          </a>
        </div>
        <div class="sns-section-detail-content">
          <h4><img src="<?php echo get_template_directory_uri(); ?>/images/common/youtube.svg" alt=""><span>Youtube</span></h4>
          <p>
            施設の日常やイベントの様子を動画で発信。ご家族も利用者様の暮らしを感じられます。
          </p>
          <a href="" class="nav-btn medium-btn  sns-button sns-button-youtube">
            <span>Youtubeチャンネルはこちら</span>
          </a>
        </div>
      </section>
    </section>
  </div>
  <div class="section-layer-style family-section">
    <section class=" content-width-medium-small">
      <h2>
        実里の小さな家族たち
      </h2>
      <p>
        利用者様やスタッフを笑顔で迎えてくれる4匹の家族を紹介します
      </p>
      <section class="family-section-content">
        <div class="family-section-content-item">
          <img src="<?php echo get_template_directory_uri(); ?>/images/main/family-img1.jpg" alt="みのりくんの画像">
          <h3>みのりくん　♂</h3>
          <span>3歳11カ月</span>
          <p>
            紹介テキストダミー紹介テキストダミー紹介テキストダミー紹介テキストダミー紹介テキストダミー
          </p>
        </div>
        <div class="family-section-content-item">
          <img src="<?php echo get_template_directory_uri(); ?>/images/main/family-img2.jpg" alt="りんちゃんの画像">
          <h3>りんちゃん　♀</h3>
          <span>３歳</span>
          <p>
            紹介テキストダミー紹介テキストダミー紹介テキストダミー紹介テキストダミー紹介テキストダミー
          </p>
        </div>
        <div class="family-section-content-item">
          <img src="<?php echo get_template_directory_uri(); ?>/images/main/family-img3.jpg" alt="まるちゃんの画像">
          <h3>まるちゃん　♀</h3>
          <span>１歳</span>
          <p>
            パパ：みのり君、
            ママ：ご近所さん
          </p>

        </div>
        <div class="family-section-content-item">
          <img src="<?php echo get_template_directory_uri(); ?>/images/main/family-img4.jpg" alt="るんちゃんの画像">
          <h3>るんちゃん　♀</h3>
          <span>8カ月</span>
          <p>
            パパ：みのり君、
            ママ：りんちゃん
            実里で初めて産まれた子犬です
          </p>
        </div>

      </section>
    </section>
  </div>
  <div class="pink-bg main-recruit">
    <section class=" pink-bg content-width-medium-small main-recruit-content">
      <div>
        <h2>採用情報</h2>
        <p>
          実里では、「まあるくいられる職場環境」を大切にしています。地域に根ざした仲間と支え合いながら、温かい介護を一緒に目指しませんか？
        </p>
        <a class="nav-btn medium-btn arrow-btn" href="/recruit/"><span>採用情報</span></a>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/images/main/recruit.png" alt="採用情報の画像">
    </section>
  </div>
  <div class="info-section">
    <section class="content-width-medium-small info-section-content">
      <div>
        <h2>
          お知らせ
        </h2>
        <a class="nav-btn medium-btn arrow-btn info-btn" href="/news"><span>一覧へ</span></a>
      </div>

      <?php
      $args = array(
        'post_type'      => 'news', // カスタム投稿タイプ 'news'
        'posts_per_page' => 3,      // 表示する投稿数（適宜変更）
        'orderby'        => 'date', // 日付順
        'order'          => 'DESC'  // 新しい順
      );
      $news_query = new WP_Query($args);

      if ($news_query->have_posts()) :
      ?>
        <ul class="info-section-content-news-list">
          <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
            <li>
              <a href="<?php the_permalink(); ?>">
                <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                <p>
                  <span><?php the_title(); ?></span>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/right-arrow-red.svg" alt="">
                </p>
              </a>
            </li>
          <?php endwhile; ?>
        </ul>
      <?php
        wp_reset_postdata(); // クエリをリセット
      else :
        echo '<p>お知らせはありません。</p>';
      endif;
      ?>

    </section>

    <div>
      <div class="contact-section content-width-large">
        <section class="contact-section-content">
          <h3>
            お問い合わせ
          </h3>
          <p>
            お問い合わせ・ご質問はお電話またはメールフォームから
          </p>
          <a href="tel:+0279-26-3162">Tel.<span>0279-26-3162</span></a>
          <a class="nav-btn medium-btn arrow-btn" href="/contact"><span>メールフォーム</span></a>
        </section>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>