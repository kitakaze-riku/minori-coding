<footer>

  <?php
  // contact, blog, news のページでなければ表示
  if (
    !is_page('contact') &&
    !is_page('confirm') &&
    !is_page('thanks') &&
    !is_home() && // ← ブログ一覧
    !is_singular('post') && // ← ブログ記事ページ
    !is_post_type_archive('news') &&
    !is_singular('news') &&
    !is_front_page() // ← トップページも除外
  ):
  ?>
    <div class="contact-section-padding display-sp sp-contact-bottom fadein-up delay-4 delay-wait-1">
      <div class="contact-section content-width-large">
        <section class="contact-section-content">
          <h3>お問い合わせ</h3>
          <p>
            <span>お問い合わせ・ご質問は</span>お電話またはメールフォームから
          </p>
          <a href="tel:+0279-26-3162">Tel.<span>0279-26-3162</span></a>
          <a class="nav-btn medium-btn arrow-btn" href="<?php echo home_url('/contact'); ?>"><span>メールフォーム</span></a>
        </section>
      </div>
    </div>
  <?php endif; ?>

  <div class="rounded-bg beige-bg footer-padding">
    <div class="content-width-large sp-footer-padding fadein-up delay-4 delay-wait-1">
      <div class="footer-sns-container">
        <a href="<?php echo home_url('/blog'); ?>">
          <p class="sp-sns-blog-text">介護への考え方や日常を発信中</p>
          <h4><img src="<?php echo get_template_directory_uri(); ?>/images/common/blog.svg" alt="ブログアイコン"><span>blog</span></h4>
        </a>

        <a href="https://www.instagram.com/your_account/" target="_blank" rel="noopener noreferrer">
          <p class="sp-sns-insta-text">利用者様との思い出を写真でシェア</p>
          <h4><img src="<?php echo get_template_directory_uri(); ?>/images/common/instagram.png" alt="Instagramロゴ"><span>Instagram</span></h4>
        </a>

        <a href="https://www.youtube.com/@your_channel" target="_blank" rel="noopener noreferrer">
          <p class="sp-sns-youtube-text">施設の日常を動画で配信中</p>
          <h4><img src="<?php echo get_template_directory_uri(); ?>/images/common/youtube.svg" alt="Youtubeロゴ"><span>Youtube</span></h4>
        </a>
      </div>

      <div class="footer-container fadein-up delay-4 delay-wait-1">

        <div class="footer-contact">
          <a href="<?php echo home_url('/'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo-minori.svg" alt="実里ロゴ">
          </a>
          <p class="footer-contact-title">住宅型有料老人ホーム 実里<br>
            デイサービス実里</p>
          <p class="footer-contact-addr">群馬県渋川市赤城町津久田266-2</p>
          <div class="footer-contact-tel">
            <span>TEL：0279-26-3162</span>
            <span>FAX：0279-26-3163</span>
          </div>
          <a href="<?php echo home_url('/about#access'); ?>" class="nav-btn medium-btn footer-btn"><span>アクセス</span></a>
        </div>

        <ul class="footer-sp-nav-container sp-footer-nav">
          <li class="accordion">
            <button class="accordion-btn">
              実里について <span class="icon">+</span>
            </button>
            <ul class="accordion-content">
              <li><a href="<?php echo home_url('/about#greeting'); ?>">ごあいさつ</a></li>
              <li><a href="<?php echo home_url('/about#feature'); ?>">実里の特徴</a></li>
              <li><a href="<?php echo home_url('/about#company'); ?>">会社概要</a></li>
              <li><a href="<?php echo home_url('/about#access'); ?>">アクセス</a></li>
            </ul>
          </li>

          <li class="accordion">
            <button class="accordion-btn">
              サービス <span class="icon">+</span>
            </button>
            <ul class="accordion-content">
              <li><a href="<?php echo home_url('/service#business'); ?>">事業紹介</a></li>
              <li><a href="<?php echo home_url('/service#commitment'); ?>">実里のこだわり</a></li>
              <li><a href="<?php echo home_url('/service#facility-overview'); ?>">施設紹介</a></li>
              <li><a href="<?php echo home_url('/service#daily'); ?>">1日の流れ</a></li>
              <li><a href="<?php echo home_url('/service#staff'); ?>">スタッフ紹介</a></li>
            </ul>
          </li>

          <li class="accordion">
            <button class="accordion-btn">
              採用情報 <span class="icon">+</span>
            </button>
            <ul class="accordion-content">
              <li><a href="<?php echo home_url('/recruit#desired-person'); ?>">求める人物像</a></li>
              <li><a href="<?php echo home_url('/recruit#employee-benefits'); ?>">福利厚生</a></li>
              <li><a href="<?php echo home_url('/recruit#staff'); ?>">先輩社員紹介</a></li>
              <li><a href="<?php echo home_url('/recruit#requirements'); ?>">募集要項</a></li>
            </ul>
          </li>

          <li class="accordion">
            <a href="<?php echo home_url('/news'); ?>" class="accordion-btn">
              お知らせ <span class="icon"> <img src="<?php echo get_template_directory_uri(); ?>/images/common/right-arrow-red-2.svg" alt=""></span>
            </a>
          </li>

          <li class="accordion">
            <a href="<?php echo home_url('/blog'); ?>" class="accordion-btn">
              ブログ <span class="icon"> <img src="<?php echo get_template_directory_uri(); ?>/images/common/right-arrow-red-2.svg" alt=""></span>
            </a>
          </li>

          <li class="accordion">
            <a href="<?php echo home_url('/contact'); ?>" class="accordion-btn">
              お問い合わせ <span class="icon"> <img src="<?php echo get_template_directory_uri(); ?>/images/common/right-arrow-red-2.svg" alt=""></span>
            </a>
          </li>
        </ul>

        <a href="http://kaigo-hohoemi2025.jp/" class="footer-banner sp-footer-nav">
          <img src="<?php echo get_template_directory_uri(); ?>/images/footer/img_banner.jpg" alt="">
        </a>

        <div class="footer-nav">
          <div class="footer-nav-content">
            <div class="footer-nav-inner">
              <h4><a href="<?php echo home_url('/about'); ?>">実里について</a></h4>
              <ul>
                <li><a href="<?php echo home_url('/about#greeting'); ?>">ごあいさつ</a></li>
                <li><a href="<?php echo home_url('/about#feature'); ?>">実里の特徴</a></li>
                <li><a href="<?php echo home_url('/about#company'); ?>">会社概要</a></li>
                <li><a href="<?php echo home_url('/about#access'); ?>">アクセス</a></li>
              </ul>
            </div>

            <div class="footer-nav-inner">
              <h4><a href="<?php echo home_url('/service'); ?>">サービス紹介</a></h4>
              <ul>
                <li><a href="<?php echo home_url('/service#business'); ?>">事業紹介</a></li>
                <li><a href="<?php echo home_url('/service#commitment'); ?>">実里のこだわり</a></li>
                <li><a href="<?php echo home_url('/service#facility-overview'); ?>">施設紹介</a></li>
                <li><a href="<?php echo home_url('/service#daily'); ?>">1日の流れ</a></li>
                <li><a href="<?php echo home_url('/service#staff'); ?>">スタッフ紹介</a></li>
              </ul>
            </div>

            <div class="footer-nav-inner">
              <h4><a href="<?php echo home_url('/recruit'); ?>">採用情報</a></h4>
              <ul>
                <li><a href="<?php echo home_url('/recruit#desired-person'); ?>">求める人物像</a></li>
                <li><a href="<?php echo home_url('/recruit#employee-benefits'); ?>">福利厚生</a></li>
                <li><a href="<?php echo home_url('/recruit#staff'); ?>">先輩社員紹介</a></li>
                <li><a href="<?php echo home_url('/recruit#requirements'); ?>">募集要項</a></li>
              </ul>
            </div>

            <div class="footer-nav-inner">
              <h4><a href="<?php echo home_url('/news'); ?>">お知らせ</a></h4>
              <h4><a href="<?php echo home_url('/blog'); ?>">ブログ</a></h4>
              <h4><a href="<?php echo home_url('/contact'); ?>">お問い合わせ</a></h4>
            </div>
          </div>
          <a href="http://kaigo-hohoemi2025.jp/" class="footer-banner">
            <img src="<?php echo get_template_directory_uri(); ?>/images/footer/img_banner.jpg" alt="ほほえみサイトへ移動します">
          </a>
        </div>
      </div>
    </div>
    <small>© 2024 Tsunoda Co., Ltd.</small>
  </div>

</footer>

</body>

</html>
<!--自作のJS記述-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
<?php wp_footer(); ?>
</body>

</html>