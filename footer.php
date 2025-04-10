<footer>

  <?php
  // contact, blog, news のページでなければ表示
  if (
    !is_page('contact') &&
    !is_page('confirm') &&
    !is_page('thanks') &&
    !is_page('blog') &&
    !is_post_type_archive('news') &&
    !is_singular('news')
  ) :
  ?>
    <div class="contact-section-padding display-sp sp-contact-bottom">
      <div class="contact-section content-width-large">
        <section class="contact-section-content">
          <h3>お問い合わせ</h3>
          <p>
            <span>お問い合わせ・ご質問は</span>お電話またはメールフォームから
          </p>
          <a href="tel:+0279-26-3162">Tel.<span>0279-26-3162</span></a>
          <a class="nav-btn medium-btn arrow-btn" href="/contact"><span>メールフォーム</span></a>
        </section>
      </div>
    </div>
  <?php endif; ?>

  <div class="rounded-bg beige-bg footer-padding">
    <div class="content-width-large sp-footer-padding">
      <div class="footer-sns-container">
        <a href="/blog">
          <p class="sp-sns-blog-text">介護への考え方や日常を発信中</p>
          <h4><img src="<?php echo get_template_directory_uri(); ?>/images/common/blog.svg" alt=""><span>blog</span></h4>
        </a>
        <a href="">
          <p class="sp-sns-insta-text">利用者様との思い出を写真でシェア</p>
          <h4><img src="<?php echo get_template_directory_uri(); ?>/images/common/instagram.svg" alt=""><span>Instagram</span></h4>
        </a>
        <a href="">
          <p class="sp-sns-youtube-text">施設の日常を動画で配信中</p>
          <h4><img src="<?php echo get_template_directory_uri(); ?>/images/common/youtube.svg" alt=""><span>Youtube</span></h4>
        </a>
      </div>

      <div class="footer-container">

        <div class="footer-contact">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo-minori.svg" alt="実里・ほほえみ">
          <p class="footer-contact-title">住宅型有料老人ホーム 実里<br>
            デイサービス実里</p>
          <p class="footer-contact-addr">群馬県渋川市赤城町津久田266-2</p>
          <div class="footer-contact-tel">
            <span>TEL：0279-26-3162</span>
            <span>FAX：0279-26-3163</span>
          </div>
          <a href="/about#access" class="nav-btn medium-btn footer-btn"><span>アクセス</span></a>
        </div>

        <ul class="footer-sp-nav-container sp-footer-nav">
          <li class="accordion">
            <button class="accordion-btn">
              実里について <span class="icon">+</span>
            </button>
            <ul class="accordion-content">
              <li><a href="/about#vision">理念・想い</a></li>
              <li><a href="#">ヒストリー</a></li>
              <li><a href="#">私たちの強み</a></li>
              <li><a href="about/#feature">目指す姿</a></li>
              <li><a href="/about#company">施設概要</a></li>
            </ul>
          </li>
          <li class="accordion">
            <button class="accordion-btn">
              サービス <span class="icon">+</span>
            </button>
            <ul class="accordion-content">
              <li><a href="/service#facility-overview">施設紹介</a></li>
              <li><a href="/service#">支援内容</a></li>
              <li><a href="/service#daily">1日の流れ</a></li>
              <li><a href="/service#staff">従業員紹介</a></li>
            </ul>
          </li>
          <li class="accordion">
            <button class="accordion-btn">
              採用情報 <span class="icon">+</span>
            </button>
            <ul class="accordion-content">
              <li><a href="/recruit#desired-person">求める人物像</a></li>
              <li><a href="/recruit#employee-benefits">福利厚生</a></li>
              <li><a href="/recruit#staff">先輩社員紹介</a></li>
              <li><a href="/recruit#requirements">募集要項</a></li>
            </ul>
          </li>

          <li class="accordion">
            <a href="/news" class="accordion-btn">
              お知らせ <span class="icon"> <img src="<?php echo get_template_directory_uri(); ?>/images/common/right-arrow-red-2.svg" alt=""></span>
            </a>
          </li>

          <li class="accordion">
            <a href="/blog" class="accordion-btn">
              ブログ <span class="icon"> <img src="<?php echo get_template_directory_uri(); ?>/images/common/right-arrow-red-2.svg" alt=""></span>
            </a>
          </li>

          <li class="accordion">
            <a href="/contact" class="accordion-btn">
              お問い合わせ <span class="icon"> <img src="<?php echo get_template_directory_uri(); ?>/images/common/right-arrow-red-2.svg" alt=""></span>
            </a>
          </li>

        </ul>

        <a href="" class="footer-banner sp-footer-nav">
          <img src="<?php echo get_template_directory_uri(); ?>/images/footer/img_banner.jpg" alt="">
        </a>

        <div class="footer-nav">
          <div class="footer-nav-content">
            <div class="footer-nav-inner">
              <h4><a href="/about">実里について</a></h4>
              <ul>
                <li><a href="/about#vision">理念・想い</a></li>
                <li><a href="#">ヒストリー</a></li>
                <li><a href="#">私たちの強み</a></li>
                <li><a href="about/#feature">目指す姿</a></li>
                <li><a href="/about#company">施設概要</a></li>
              </ul>
            </div>

            <div class="footer-nav-inner">
              <h4><a href="/service">サービス紹介</a></h4>
              <ul>
                <li><a href="/service#facility-overview">施設紹介</a></li>
                <li><a href="/service#">支援内容</a></li>
                <li><a href="/service#daily">1日の流れ</a></li>
                <li><a href="/service#staff">従業員紹介</a></li>
              </ul>
            </div>

            <div class="footer-nav-inner">
              <h4><a href="/recruit">採用情報</a></h4>
              <ul>
                <li><a href="/recruit#desired-person">求める人物像</a></li>
                <li><a href="/recruit#employee-benefits">福利厚生</a></li>
                <li><a href="/recruit#staff">先輩社員紹介</a></li>
                <li><a href="/recruit#requirements">募集要項</a></li>
              </ul>
            </div>

            <div class="footer-nav-inner">
              <h4><a href="/news">お知らせ</a></h4>
              <h4><a href="/blog">ブログ</a></h4>
              <h4><a href="/contact">お問い合わせ</a></h4>
            </div>
          </div>
          <a href="" class="footer-banner">
            <img src="<?php echo get_template_directory_uri(); ?>/images/footer/img_banner.jpg" alt="">
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